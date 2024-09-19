<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogImages;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Auth;
use DataTables;

class BlogController extends Controller
{


    public function index(Request $request)
    { 
            $ParentBlogs =Blog::take(4)->get();
            if($request->ajax()) {    
                $blogs = Blog::with(['images'])->get();    
                return Datatables::of($blogs)
                    ->addIndexColumn()
                    ->addColumn('action', function ($model) {
                        $editRoute = route('blogs.edit', $model->id);
                        $detailRoute = route('blogs.show', $model->id);
                        return '<div class="d-flex gap-2">
                            <a href="' . $detailRoute . '" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                            <a href="' . $editRoute . '" class="btn btn-soft-primary btn-sm">
                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                            </a>
                        </div>';
                    })
                    ->addColumn('status', function ($model) {
                        return view('layouts.action.statustoggle', [
                            'status' => $model->status,
                            'id' => $model->id
                        ]);
                    })
                    ->rawColumns(['action', 'status'])
                    ->make(true);
            }
            return view('admin.blogs.index',compact('ParentBlogs'));
    }

    public function create()
    {
        return view('blogs.create',compact('mainTitle','pageTitle','pageUrl','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
     
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'title' => 'required|string|max:255',
             'body' => 'nullable|string',
             'images.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048',
         ]);
     
         if ($validator->fails()) {
             return response()->json([
                 'status' => 'warning',
                 'message' => $validator->errors()->first(),
             ]);
         }
     
         $blog = new Blog();
         $blog->title = $request->title;
         $blog->date = now()->toDateString();
         $blog->body = $request->body;
     
         if ($request->hasFile('images')) {
             $files = $request->file('images');
     
             if (count($files) > 0) {
                 if (count($files) === 1) {
                     $file = $files[0];
                     $fileName = time() . '_' . $file->getClientOriginalName();
                     $imagePath = $file->storeAs('blog_images', $fileName, 'public'); 
                 } else {
                     $firstFile = array_shift($files);
                     $fileName = time() . '_' . $firstFile->getClientOriginalName();
                     $imagePath = $firstFile->storeAs('blog_images', $fileName, 'public');
                 }
             }
         }
     
         $blog->save();
     
         if ($request->hasFile('images') && count($request->file('images')) > 1) {
             foreach ($files as $file) {
                 $fileName = time() . '_' . $file->getClientOriginalName();
                 $filePath = $file->storeAs('blog_images', $fileName, 'public');
     
                 BlogImages::create([
                     'blog_id' => $blog->id,
                     'image_path' => $filePath,
                 ]);
             }
         }
     
         return response()->json([
             'status' => 'success',
             'message' => 'Blog created successfully!',
         ]);
     }


     public function edit($id)
     {
         $blog = Blog::with('images')->find($id);
     
         if (!$blog) {
             return redirect()->route('blogs.index')->with('error', 'Blog not found');
         }
     
         return view('blogs.edit', compact('mainTitle', 'pageTitle', 'pageUrl', 'blog', 'categories'));
     }
     
     
 
     public function update(Request $request)
     {
         $input = $request->all();
     
         $validator = Validator::make($input, [
             'title' => 'required|string|max:255', 
             'body' => 'required|string', 
             'images.*' => 'nullable|mimes:jpg,jpeg,png,gif',
         ]);
     
         if ($validator->fails()) {
             return response()->json([
                 'status' => 'warning',
                 'message' => $validator->errors()->first(),
             ], 422);
         }
     
         try {
             $blog = Blog::findOrFail($request->id);
     
             $blog->title = $request->title;
             $blog->body = $request->body;
     
             if ($request->hasFile('images')) {
                 $files = $request->file('images');
     
                
                 if (count($files) == 1) {
                     if ($blog->image) {
                         Storage::disk('public')->delete($blog->image);
                     }
     
                     $file = $files[0];
                     $fileName = time() . '_' . $file->getClientOriginalName();
                     $filePath = $file->storeAs('blog_images', $fileName, 'public');
     
                     $blog->image = $filePath;
     
                     BlogImages::where('blog_id', $blog->id)->delete();
                 } else {
                     $primaryImage = $files[0];
                     $fileName = time() . '_' . $primaryImage->getClientOriginalName();
                     $filePath = $primaryImage->storeAs('blog_images', $fileName, 'public');
     
                     if ($blog->image) {
                         Storage::disk('public')->delete($blog->image);
                     }
                     $blog->image = $filePath;
     
                     BlogImages::where('blog_id', $blog->id)->delete();
     
                     for ($i = 1; $i < count($files); $i++) {
                         $file = $files[$i];
                         $fileName = time() . '_' . $file->getClientOriginalName();
                         $filePath = $file->storeAs('blog_images', $fileName, 'public');
     
                         BlogImages::create([
                             'blog_id' => $blog->id,
                             'image_path' => $filePath,
                         ]);
                     }
                 }
             }
     
             // Step 5: Handle removed images
             if ($request->has('removed_images')) {
                 // Sanitize removed_images: ensure it contains only valid integers
                 if($request->removed_images == 'primary,'){
                     if ($request->hasFile('images')) {
                         $files = $request->file('images');
                         $primaryImage = $files[1];
                         $fileName = time() . '_' . $primaryImage->getClientOriginalName();
                         $filePath = $primaryImage->storeAs('blog_images', $fileName, 'public');
         
                         // Remove the existing primary image
                         if ($blog->image) {
                             Storage::disk('public')->delete($blog->image);
                         }
                         $blog->image = $filePath;
                     }
                 }else{
                 // log::info("Hello");
                     $removedImageIds = array_filter(explode(',', rtrim($request->removed_images, ',')), 'is_numeric');
         
                     if (!empty($removedImageIds)) {
                         $imagesToDelete = BlogImages::whereIn('id', $removedImageIds)->get();
                         
                         foreach ($imagesToDelete as $image) {
                             // Delete image file from storage
                             Storage::disk('public')->delete($image->image_path);
                         }
                         
                         // Delete records from the database
                         BlogImages::whereIn('id', $removedImageIds)->delete();
                     }
                 }
             }
     
             // Check if at least one image exists after update
             $imagesCount = BlogImages::where('blog_id', $blog->id)->count();
             if (!$blog->image && $imagesCount == 0) {
                 return response()->json([
                     'status' => 'error',
                     'message' => 'At least one image must be present for the blog.',
                 ], 400);
             }
     
             // Step 6: Save the blog with updated information
             $blog->save();
     
             // Step 7: Return success response
             return response()->json([
                 'status' => 'success',
                 'message' => 'Blog updated successfully!',
             ], 200);
     
         } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
             return response()->json([
                 'status' => 'error',
                 'message' => 'Blog not found.',
             ], 404);
     
         } catch (\Exception $e) {
             Log::error("Error: " . $e->getMessage());
             return response()->json([
                 'status' => 'error',
                 'message' => 'An error occurred while updating the blog.',
             ], 500);
         }
     }

}
