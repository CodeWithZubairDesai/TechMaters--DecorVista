<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;
use App\Models\ProductCategories;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Validator;
use Auth;
use DB;
use DataTables;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::with('images','productcategory')->get();
        Log::info("product Dta = ".$products);
        return response()->json([
            'status' => 'success',
            'data' => $products
        ]);
        return view('users.product-archive', compact('products'));

    }
    



    public function show($id){
    // Fetch the product by ID with related variants and images
        if ($this->segment =='api') {
            $product = Product::with(['variants', 'images'])
            ->where('id', $id)
            ->where('status', 1)
            ->first();
    
            // Check if product exists
            if (!$product) {
                return response()->json([
                    'status' => 'warning',
                    'message' => 'Product not found or inactive',
                    'data' => null,
                ], 404);
            }
        
            // Format the data
            $formattedProduct = [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'category_id' => $product->category_id,
                'status' => $product->status,
                'created_by' => $product->created_by,
                'created_date' => $product->created_date,
                'image_paths' => $product->images->pluck('image_path')->toArray(), // Convert to array
                'price' => $product->has_variants ? null : $product->fixed_price, // Use fixed price if no variants
                'variants' => $product->has_variants ? $product->variants->map(function ($variant) {
                    return [
                        'weight' => $variant->weight,
                        'price' => $variant->price,
                        'sku' => $variant->sku,
                    ];
                })->toArray() : [], // Convert to array
            ];
        
            return response()->json([
                'status' => 'success',
                'message' => 'Product Detail retrieved successfully',
                'data' => $formattedProduct,
            ], 200);
        } else {
            $product = Product::with(['variants', 'images','reviews.user'])
            ->where('id', $id)
            ->first();
    
            // Check if product exists
            if (!$product) {
                return response()->json([
                    'status' => 'warning',
                    'message' => 'Product not found or inactive',
                    'data' => null,
                ], 404);
            }

             return view($this->page.'show',compact('product'));
        }
        
    }


    public function getProductsByCategory(Request $request, $categoryId)
    {
        try {
            // Check if the category is a main category
            $category = Categories::findOrFail($categoryId);
            if ($category->parent_id !== 0) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'The provided category ID does not belong to a main category.',
                ], 400);
            }

            // Get subcategories and main category IDs
            $subCategoryIds = Categories::where('parent_id', $categoryId)->pluck('id')->toArray();
            $allCategoryIds = array_merge([$categoryId], $subCategoryIds);

            // Pagination setup
            $perPage = $request->input('per_page', 15);
            $paginatedProducts = Product::whereIn('category_id', $allCategoryIds)
                ->where('status', 1)
                ->with(['variants', 'images']) // Load variants and images
                ->paginate($perPage);

            // Format the products
            $products = $paginatedProducts->getCollection()->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'category_id' => $product->category_id,
                    'status' => $product->status,
                    'created_by' => $product->created_by,
                    'created_date' => $product->created_date,
                    'image_paths' => $product->images->pluck('image_path'),
                    'variants' => $product->variants->map(function ($variant) {
                        return [
                            'weight' => $variant->weight,
                            'price' => $variant->price,
                            'sku' => $variant->sku,
                        ];
                    }),
                ];
            });

            // Return paginated response
            return response()->json([
                'status' => 'success',
               'message' => "Product Related to Category Id : $categoryId Retrieved successfully",
                'data' => $products,
                'pagination' => [
                    'total' => $paginatedProducts->total(),
                    'current_page' => $paginatedProducts->currentPage(),
                    'per_page' => $paginatedProducts->perPage(),
                    'last_page' => $paginatedProducts->lastPage(),
                    'from' => $paginatedProducts->firstItem(),
                    'to' => $paginatedProducts->lastItem(),
                    'prev_page_url' => $paginatedProducts->previousPageUrl(),
                    'next_page_url' => $paginatedProducts->nextPageUrl(),
                    'first_page_url' => $paginatedProducts->url(1),
                    'last_page_url' => $paginatedProducts->url($paginatedProducts->lastPage()),
                ]
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
                'data' => null,
            ], 500);
        }
    }

    public function getProductsBySubCategory(Request $request, $subCategoryId)
    {
        try {
            // Check if the subcategory exists and is valid
            $subCategory = Categories::findOrFail($subCategoryId);
            if ($subCategory->parent_id === 0) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'The provided subcategory ID is not valid.',
                ], 400);
            }

            // Pagination setup
            $perPage = $request->input('per_page', 15);
            $paginatedProducts = Product::where('category_id', $subCategoryId)
                ->where('status', 1)
                ->with(['variants', 'images']) // Load variants and images
                ->paginate($perPage);

            // Format the products
            $products = $paginatedProducts->getCollection()->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'category_id' => $product->category_id,
                    'status' => $product->status,
                    'created_by' => $product->created_by,
                    'created_date' => $product->created_date,
                    'image_paths' => $product->images->pluck('image_path'),
                    'variants' => $product->variants->map(function ($variant) {
                        return [
                            'weight' => $variant->weight,
                            'price' => $variant->price,
                            'sku' => $variant->sku,
                        ];
                    }),
                ];
            });

            // Return paginated response
            return response()->json([
                'status' => 'success',
                'message' => "Product Related to Sub Caategory Id : $subCategoryId Retrieved successfully",
                'data' => $products,
                'pagination' => [
                    'total' => $paginatedProducts->total(),
                    'current_page' => $paginatedProducts->currentPage(),
                    'per_page' => $paginatedProducts->perPage(),
                    'last_page' => $paginatedProducts->lastPage(),
                    'from' => $paginatedProducts->firstItem(),
                    'to' => $paginatedProducts->lastItem(),
                    'prev_page_url' => $paginatedProducts->previousPageUrl(),
                    'next_page_url' => $paginatedProducts->nextPageUrl(),
                    'first_page_url' => $paginatedProducts->url(1),
                    'last_page_url' => $paginatedProducts->url($paginatedProducts->lastPage()),
                ]
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
                'data' => null,
            ], 500);
        }
    }


    public function create()
    {
        $subCategories = Categories::where('status', 1)
                          ->whereNotNull('parent_id')
                          ->where('parent_id', '!=', 0)
                          ->get();

        $brands = Brands::where('status',1)->get();

        return view('products.create' , compact('subCategories' ,'brands'));
    }    

    public function store(Request $request)
    {
        $input = $request->all();
    
        // Validation rules
        $validator = Validator::make($input, [
            'product_name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'description' => 'nullable|string',
            'fixed_price' => 'nullable|numeric|required_if:pricing_type,fixed',
            'variant_weight.*' => 'nullable|numeric|required_if:pricing_type,variant',
            'variant_price.*' => 'nullable|numeric|required_if:pricing_type,variant',
            'file.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048', // Handle image upload
        ]);
    
        // Custom validation logic for category or brand exclusivity
        if (!$request->category_id && !$request->brand_id) {
            return response()->json([
                'status' => 'warning',
                'message' => 'Either a category or a brand must be selected.',
            ]);
        }
    
        if ($request->category_id && $request->brand_id) {
            return response()->json([
                'status' => 'warning',
                'message' => 'Only one of category or brand should be selected, not both.',
            ]);
        }
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first(),
            ]);
        }
    
        // Step 2: Save product
        $product = new Product();
        $product->name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->has_variants = $request->has_variants === 'true' ? 1 : 0;
        $product->fixed_price = $request->pricing_type === 'fixed' ? $request->fixed_price : null;
        $product->save();
    
        // Step 3: Handle image uploads
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('product_images', $fileName, 'public'); // Store the file
    
                // Save the image path to the database
                ProductImages::create([
                    'product_id' => $product->id,
                    'image_path' => $filePath,
                ]);
            }
        }
    
        // Step 4: Handle product variants (if pricing_type is variant)
        if ($request->pricing_type === 'variant') {
            $variantWeights = $request->input('variant_weight', []);
            $variantPrices = $request->input('variant_price', []);
    
            for ($i = 0; $i < count($variantWeights); $i++) {
                // Only save non-empty variant data
                if (!empty($variantWeights[$i]) && !empty($variantPrices[$i])) {
                    ProductVariants::create([
                        'product_id' => $product->id,
                        'weight' => $variantWeights[$i],
                        'price' => $variantPrices[$i],
                    ]);
                }
            }
        }
    
        // Step 5: Handle brand association
        if ($request->brand_id) {
            BrandProducts::create([
                'product_id' => $product->id,
                'brand_id' => $request->brand_id,
            ]);
        }
    
        // Step 6: Return success response
        return response()->json([
            'status' => 'success',
            'message' => 'Product created successfully!',
        ]);
    }
    
    public function edit($id)
    {
        // Fetch the product by ID, along with its related variants, images, and associated brands
        $product = Product::with(['variants', 'images', 'brands'])->findOrFail($id);
    
        // Fetch the subcategories that are active (status = 1) and have a parent category
        $subCategories = Categories::where('status', 1)
                            ->whereNotNull('parent_id')
                            ->where('parent_id', '!=', 0)
                            ->get();
    
        // Fetch all active brands
        $brands = Brands::where('status', 1)->get(); 
    
        // Determine the IDs of associated brands
        $associatedBrands = $product->brands->pluck('id')->toArray();
    
        // Pass the product, subCategories, brands, and associatedBrands data to the edit view
        return view('products.edit', compact('product', 'subCategories', 'brands', 'associatedBrands'));
    }
    
    


    public function update(Request $request)
    {
        $input = $request->all();
    
        // Validation rules
        $validator = Validator::make($input, [
            'product_name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'description' => 'nullable|string',
            'fixed_price' => 'nullable|numeric|required_if:pricing_type,fixed',
            'variant_weight.*' => 'nullable|numeric|required_if:pricing_type,variant',
            'variant_price.*' => 'nullable|numeric|required_if:pricing_type,variant',
            'file.*' => 'nullable|mimes:jpg,jpeg,png,gif|max:2048', // Handle image upload
        ]);
    
        // Custom validation logic for category or brand exclusivity
        if (!$request->category_id && !$request->brand_id) {
            return response()->json([
                'status' => 'warning',
                'message' => 'Either a category or a brand must be selected.',
            ]);
        }
    
        if ($request->category_id && $request->brand_id) {
            return response()->json([
                'status' => 'warning',
                'message' => 'Only one of category or brand should be selected, not both.',
            ]);
        }
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first(),
            ]);
        }
    
        try {
            // Step 2: Retrieve existing product or return 404 if not found
            $product = Product::findOrFail($request->id);
    
            // Step 3: Update product data
            $product->name = $request->product_name;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
    
            // Determine if the product has variants
            if ($request->has_variants === 'true') {
                $product->has_variants = 1;
                $product->fixed_price = null; 
            } else {
                $product->has_variants = 0;
                $product->fixed_price = $request->fixed_price;
                
                // Remove existing variants if product is not variant-based
                ProductVariants::where('product_id', $product->id)->delete();
            }
    
            // Save updated product data
    
            // Step 4: Handle image uploads
            if ($request->hasFile('file')) {
                // Delete existing images
                ProductImages::where('product_id', $product->id)->delete();
    
                foreach ($request->file('file') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->storeAs('product_images', $fileName, 'public');
    
                    // Save the new image to the database
                    ProductImages::create([
                        'product_id' => $product->id,
                        'image_path' => $filePath,
                    ]);
                }
            }
    
            // Step 5: Handle product variants (if pricing_type is variant)
            if ($request->pricing_type === 'variant') {
                // Remove existing variants before updating
                ProductVariants::where('product_id', $product->id)->delete();
    
                $variantWeights = $request->input('variant_weight', []);
                $variantPrices = $request->input('variant_price', []);
    
                foreach ($variantWeights as $index => $weight) {
                    if (!empty($weight) && isset($variantPrices[$index])) {
                        ProductVariants::create([
                            'product_id' => $product->id,
                            'weight' => $weight,
                            'price' => $variantPrices[$index],
                        ]);
                    }
                }
            }
    
            // Step 6: Handle brand association
            if ($request->brand_id) {
                // Delete existing brand association if it exists
                BrandProducts::where('product_id', $product->id)->delete();

                $product->
    
                // Create new brand association
                BrandProducts::create([
                    'product_id' => $product->id,
                    'brand_id' => $request->brand_id,
                ]);
            }

            $product->save();

    
            // Step 7: Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully!',
            ]);
    
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle product not found exception
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found.',
            ], 404);
            
        } catch (\Exception $e) {
            // Handle other exceptions
            Log::info("error = ".$e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    


    
    
    
    











    public function status(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'warning',
                    'message' => $validator->errors()->first(),
                ]);
            }
            $category = Product::find($request->id);
            if ($category == null) {
                return response()->json([
                    'status' => 'warning',
                    'message' => 'Product Not Found',
                ]);
            }
            $status = $category->status == 1 ? 2 : 1;
            $category->status  = $status;
            $category->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Product Status Updated successfully',
                'data' => null,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
            ], 500);
        }
    }




}

