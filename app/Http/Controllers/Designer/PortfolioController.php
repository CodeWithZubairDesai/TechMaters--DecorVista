<?php

namespace App\Http\Controllers\Designer;


use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Auth;
use Datatables;
class PortfolioController extends Controller
{
    public function index() {
            $portfolios = Portfolio::with(['designer', 'consultants', 'images'])
                ->where('designer_id', Auth::user()->id)
                ->get();
        
            return view('designer.portfolio.index', compact('portfolios'));
        } 
    
    public function create() {
        return view('designer.portfolio.create');
    }

    
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'main_image' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048', // For main image
        'hero_images.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048', // For hero images
        'carousel_images.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048', // For carousel images
        'hero_images' => 'nullable|array|max:2', // Limit to 2 hero images
        'carousel_images' => 'nullable|array|min:3', // Minimum 3 carousel images
        'timeslots' => 'required|array',
        'timeslots.*' => 'nullable|date',
        'messages' => 'required|array',
        'messages.*' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'warning',
            'message' => $validator->errors()->first(),
        ]);
    }

    // Create Portfolio
    $portfolio = Portfolio::create([
        'designer_id' => auth()->id(), // Assuming the designer is authenticated
        'title' => $request->title,
        'description' => $request->description,
    ]);

    // Handle Main Image
    if ($request->hasFile('main_image')) {
        $file = $request->file('main_image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('portfolio_images/main', $fileName, 'public');

        PortfolioImage::create([
            'portfolio_id' => $portfolio->id,
            'image_path' => $filePath,
            'type' => 'main',
        ]);
    }

    // Handle Hero Images (up to 2 images)
    if ($request->hasFile('hero_images')) {
        $files = $request->file('hero_images');

        foreach ($files as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('portfolio_images/hero', $fileName, 'public');

            PortfolioImage::create([
                'portfolio_id' => $portfolio->id,
                'image_path' => $filePath,
                'type' => 'hero',
            ]);
        }
    }

    // Handle Carousel Images (at least 3 images)
    if ($request->hasFile('carousel_images')) {
        $files = $request->file('carousel_images');

        foreach ($files as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('portfolio_images/carousel', $fileName, 'public');

            PortfolioImage::create([
                'portfolio_id' => $portfolio->id,
                'image_path' => $filePath,
                'type' => 'carousel',
            ]);
        }
    }

    // Handle Consultation Slots
    foreach ($request->timeslots as $index => $timeslot) {
        Consultant::create([
            'portfolio_id' => $portfolio->id,
            'available_at' => $timeslot,
            'message' => $request->messages[$index],
        ]);
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Portfolio created successfully!',
    ]);
}


    
    


}