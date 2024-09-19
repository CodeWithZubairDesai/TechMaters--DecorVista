@extends('layouts.main-file')

@section('main-section')
<div class="col-xl-12 col-lg-12 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold topbar-button pe-none text-uppercase mb-2 mx-4">Edit Product</h4>
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary mx-4 mb-2">Product List</a>
</div>
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <form id="productEditForm" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" id="removed-images" name="removed_images" value="">

                <!-- Product Photo Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product Photo</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="product-images" class="form-label">Product Images</label>
                            <input type="file" id="product-images" name="file[]" multiple accept="image/*" class="form-control">
                        </div>
                        <div id="image-preview-container" class="d-flex flex-wrap">
                            @foreach($product->images as $image)
                                <div class="position-relative m-2">
                                    <img src="{{ env('ASSET2_URL') }}{{ $image->image_path }}" class="img-thumbnail" style="width: 150px;">
                                    <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 remove-image" data-image-id="{{ $image->id }}">
                                        <i class="bx bx-x"></i>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Product Information Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Product Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Product Name</label>
                                    <input type="text" id="product-name" name="product_name" class="form-control" value="{{ $product->name }}" placeholder="Item Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-categories" class="form-label">Product Categories</label>
                                    <select class="form-control" id="product-categories" name="category_id" data-choices data-choices-groups data-placeholder="Select Categories">
                                        <option value="">Choose a category</option>
                                        @foreach($subCategories as $cRow)
                                            <option value="{{ $cRow->id }}" {{ $product->category_id == $cRow->id ? 'selected' : '' }}>
                                                {{ $cRow->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Brand</label>
                                    <select class="form-control" id="product-brand" name="brand_id"  data-choices data-placeholder="Select Brand">
                                    <option value="">Choose a Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ in_array($brand->id, $associatedBrands) ? 'selected' : '' }}>
                                                {{ $brand->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="description" rows="7" placeholder="Short description about the product">{{ $product->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Type Toggle Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Pricing Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="pricing-type" class="form-label">Pricing Type</label>
                            <div>
                                <div class="form-check">
                                    <input type="radio" id="fixed-price" name="pricing_type" value="fixed" class="form-check-input" {{ !$product->has_variants ? 'checked' : '' }}>
                                    <label for="fixed-price" class="form-check-label">Fixed Price</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="variant-price" name="pricing_type" value="variant" class="form-check-input" {{ $product->has_variants ? 'checked' : '' }}>
                                    <label for="variant-price" class="form-check-label">Variant Price</label>
                                </div>
                            </div>
                        </div>

                        <!-- Fixed Price Input -->
                        <div class="row" id="fixed-price-fields" style="{{ $product->has_variants ? 'display: none;' : '' }}">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-price" class="form-label">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                        <input type="number" id="product-price" name="fixed_price" class="form-control" value="{{ $product->fixed_price }}" placeholder="000">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Variant Price Inputs -->
                        <div id="variant-price-fields" style="{{ $product->has_variants ? 'display: block;' : 'display: none;' }}">
                            <div class="mb-3">
                                <label for="kilogram-price" class="form-label">Price per Kilogram</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="kilogram-price" name="kilogram_price" class="form-control" value="{{ old('kilogram_price', 0) }}" placeholder="Enter price for 1kg">
                                    <button type="button" id="generate-prices" class="btn btn-primary">Generate</button>
                                </div>
                            </div>
                            <div id="generated-variants">
                                @foreach($product->variants as $variant)
                                    <div class="row mb-3">
                                        <div class="col-lg-5">
                                            <label class="form-label">Weight (in grams)</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text fs-20"><i class='bx bxs-weight'></i></span>
                                                <input type="number" name="variant_weight[]" class="form-control" value="{{ $variant->weight }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                                <input type="number" name="variant_price[]" class="form-control" value="{{ $variant->price }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hidden Field for has_variants -->
                <input type="hidden" id="has-variants" name="has_variants" value="{{ $product->has_variants ? 'true' : 'false' }}">

                <!-- Submit Button -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button class="btn btn-outline-primary" type="submit" id="submit">Update Product</button>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" style="display: none;">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Handle Pricing Type Change
    $('input[name="pricing_type"]').change(function() {
        let pricingType = $(this).val();
        if (pricingType === 'fixed') {
            $('#fixed-price-fields').show();
            $('#variant-price-fields').hide();
            $('#has-variants').val('false');
        } else {
            $('#fixed-price-fields').hide();
            $('#variant-price-fields').show();
            $('#has-variants').val('true');
        }
    });

    // Initialize image preview
    handleImagePreview('#product-images', '#image-preview-container');

    // Handle image removal
    $('#image-preview-container').on('click', '.remove-image', function() {
        const imageId = $(this).data('image-id');
        if (confirm('Are you sure you want to remove this image?')) {
            $('#removed-images').val(function(index, currentVal) {
                return currentVal ? currentVal + ',' + imageId : imageId;
            });
            $(this).closest('div.position-relative').remove();
        }
    });

    // Generate Variant Prices based on kilogram price
    $('#generate-prices').click(function() {
        const kilogramPrice = parseFloat($('#kilogram-price').val());
        if (isNaN(kilogramPrice) || kilogramPrice <= 0) {
            alert('Please enter a valid price for 1 kilogram.');
            return;
        }

        const weights = [125, 250, 500, 1000];
        $('#generated-variants').empty();
        weights.forEach(weight => {
            const price = (kilogramPrice * weight / 1000).toFixed(2);
            $('#generated-variants').append(`
                <div class="row mb-3">
                    <div class="col-lg-5">
                        <label class="form-label">Weight (in grams)</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-20"><i class='bx bxs-weight'></i></span>
                            <input type="number" name="variant_weight[]" class="form-control" value="${weight}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <label class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                            <input type="number" name="variant_price[]" class="form-control" value="${price}" readonly>
                        </div>
                    </div>
                </div>
            `);
        });
    });

    // Handle form submission
    $('#productEditForm').on('submit', function(e) {
        e.preventDefault();
        handleFormUploadForm(
            'POST',
            '#productEditForm',
            '#submit',
            '{{ route('products.update', $product->id) }}',
            '{{ route('products.index') }}'
        );
    });
});
</script>
@endpush
