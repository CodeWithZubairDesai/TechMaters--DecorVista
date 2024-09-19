<?php

namespace App\Http\Controllers\Designer;


use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
  public function create() {
        return view('InteriorDesignerDashboard.InteriorDesignerCreatePortfolio');
    }


    
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        // If validation fails, return error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first(),
            ]);
        }
    
        // Create a new Portfolio
        $portfolio = new Portfolio();
        $portfolio->designer_id = Auth::id();  // Assuming the authenticated user is the designer
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->created_by = Auth::user()->name;
        $portfolio->created_date = now()->toDateString();
        
        $portfolio->save();
        
        $c = new Consultant();
        $c->available_at = $request->timeslot;
        $c->message = $request->msg;
        $c->designer_id = Auth::id();
        $c->save();

        // Check if images are provided
        // if ($request->hasFile('images')) {
        //     $files = $request->file('images');
    
        //     foreach ($files as $file) {
        //         // Generate a unique file name
        //         $fileName = time() . '_' . $file->getClientOriginalName();
        //         // Store the image in the 'portfolio_images' directory in the public disk
        //         $filePath = $file->storeAs('portfolio_images', $fileName, 'public');
    
        //         // Create PortfolioImage for each uploaded image
        //         PortfolioImage::create([
        //             'portfolio_id' => $portfolio->id,
        //             'image_path' => $filePath,
        //             'created_by' => Auth::user()->name,
        //             'created_date' => now()->toDateString(),
        //         ]);
        //     }
        // }
    
        // Return a success message
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Portfolio created successfully!',
        // ]);
    }
}
