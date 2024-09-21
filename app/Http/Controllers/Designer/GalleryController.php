<?php

namespace App\Http\Controllers\Designer;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\GalleryCategories;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::with(['gallerycategory', 'user'])
        ->where('user_id', Auth::user()->id)
        ->get();
        return view('designer.gallery.index', compact('gallery'));
    }
    public function create()
    {
        return view('designer.gallery.create');
    }
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|mimes:jpg,jpeg,png,gif|max:2048', 
        'category_id' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'warning',
            'message' => $validator->errors()->first(),
        ]);
    }

    $gallery = Gallery::create([
        'name' => $request->name,
        'category_id' => $request->category_id
    ]);

    if ($request->hasFile('name')) {
        $file = $request->file('name');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('gallery_images/', $fileName, 'public');
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Gallery created successfully!',
    ]);
    return redirect()->route('designer.gallery.index');
}
public function destroy($id)
{
    $gallery = Gallery::findOrFail($id);
    $gallery->delete();
    return redirect()->route('designer.gallery.index')->with('success', 'Gallery deleted successfully.');
}

}
