@extends('layouts.main-file')

@section('main-section')
<div class="col-xl-12 col-lg-12 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold topbar-button pe-none text-uppercase mb-2 mx-4">Create Product</h4>
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary mx-4 mb-2">Product List</a>
</div>
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <form id="productCreateForm" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Product Photo Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Add Product Photo</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="product-images" class="form-label">Product Images</label>
                            <input type="file" id="product-images" name="file[]" multiple accept="image/*" class="form-control" required>
                        </div>
                        <div id="image-preview-container" class="d-flex flex-wrap">
                            <!-- Image previews will be appended here -->
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
                                    <input type="text" id="product-name" name="product_name" class="form-control" placeholder="Item Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-categories" class="form-label">Product Categories</label>
                                    <select class="form-control" id="product-categories" name="category_id" data-choices data-choices-groups data-placeholder="Select Categories">
                                        <option value="">Choose a category</option>
                                        @foreach($subCategories as $cRow)
                                            <option value="{{$cRow->id}}">{{$cRow->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Brand</label>
                                    <select class="form-control" id="product-brand" name="brand_id" data-choices data-placeholder="Select Brand">
                                        <option value="">Choose a brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="description" rows="7" placeholder="Short description about the product"></textarea>
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
                                    <input type="radio" id="fixed-price" name="pricing_type" value="fixed" class="form-check-input" checked>
                                    <label for="fixed-price" class="form-check-label">Fixed Price</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="variant-price" name="pricing_type" value="variant" class="form-check-input">
                                    <label for="variant-price" class="form-check-label">Variant Price</label>
                                </div>
                            </div>
                        </div>

                        <!-- Fixed Price Input -->
                        <div class="row" id="fixed-price-fields">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-price" class="form-label">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                        <input type="number" id="product-price" name="fixed_price" class="form-control" placeholder="000">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Variant Price Inputs -->
                        <div id="variant-price-fields" style="display: none;">
                            <div class="mb-3">
                                <label for="kilogram-price" class="form-label">Price per Kilogram</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="kilogram-price" class="form-control" placeholder="Enter price for 1kg">
                                    <button type="button" id="generate-prices" class="btn btn-primary">Generate</button>
                                </div>
                            </div>
                            <!-- Generated Variants -->
                            <div id="generated-variants">
                                <!-- Generated variants will be appended here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hidden Field for has_variants -->
                <input type="hidden" id="has-variants" name="has_variants" value="false">

                <!-- Submit Button -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button class="btn btn-outline-primary" type="submit" id="submit">Create Product</button>
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
    $('#productCreateForm').on('submit', function(e) {
        e.preventDefault();
        handleFormUploadForm(
            'POST',
            '#productCreateForm',
            '#submit',
            '{{ route('products.store') }}',
            '{{ route('products.index') }}'
        );
    });
});
</script>
@endpush
