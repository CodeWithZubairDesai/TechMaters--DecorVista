<?php

namespace App\Http\Controllers\Designer;


use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Auth;
use Datatables;
class PortfolioController extends Controller
{
    public function create() {
        return view('designer.portfolio.create');
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048',
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
    
        // Handle Portfolio Images
        if ($request->hasFile('images')) {
            $files = $request->file('images');
    
            foreach ($files as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('portfolio_images', $fileName, 'public');
    
                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image_path' => $filePath,
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
