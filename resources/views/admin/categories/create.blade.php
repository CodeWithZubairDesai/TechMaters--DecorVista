@extends('layouts.main-file')
@section('main-section')
<div class="col-xl-12 col-lg-12 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold topbar-button pe-none text-uppercase mb-2 mx-4">Create Category</h4>
    <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary mx-4 mb-2">
        Category List
    </a>
</div>
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <form id="categoryCreateForm" method="post" enctype="multipart/form-data">
                <!-- Product Photo Section -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Category Photo</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="product-images" class="form-label">Category Image</label>
                            <input type="file" id="category-images" name="image" class="form-control" required>
                        </div>
                        <div id="image-preview-container" class="d-flex flex-wrap">
                            <!-- Image previews will be appended here -->
                        </div>
                    </div>
                </div>

                <!-- Product Information Section -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">General Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Category Title</label>
                                    <input type="text" id="product-name" name="name" class="form-control" placeholder="Items Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Parent Category</label>
                                <select class="form-control" id="product-categories" name="parent_id" data-choices data-choices-groups data-placeholder="Select Categories">
                                    <option value="no_parent">No Parent</option>
                                    @foreach($categories as $cRow)
                                        <option value="{{ $cRow->id }}">{{ $cRow->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control bg-light-subtle" id="description" name="description" rows="7" placeholder="Short description about the product" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button class="btn btn-outline-primary" type="submit" id="submit">Create Category</button>
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
    // Handle image preview
    $('#category-images').on('change', function(event) {
        $('#image-preview-container').empty(); // Clear existing previews
        const file = event.target.files[0]; // Only take the first file
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = $('<img>').attr('src', e.target.result).addClass('img-thumbnail').css('width', '150px').css('margin', '5px');
                $('#image-preview-container').append(img);
            }
            reader.readAsDataURL(file);
        }
    });

    // Handle form submission using the handleFileUploadForm function
    $('#categoryCreateForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Define target URL and redirect URL
        let targetUrl = '{{ route('categories.store') }}';
        let redirectUrl = '{{ route('categories.index') }}';

        // Call the handleFileUploadForm function
        handleFormUploadForm('POST', '#categoryCreateForm', '#submit', targetUrl, redirectUrl);
    });
});

</script>
@endpush
