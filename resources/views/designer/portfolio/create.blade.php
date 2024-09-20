@extends('designer.layouts.layout')
@section('title')
Portfolio
@endsection

@section('main-section')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Create Portfolio</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form id="portfolioCreateForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="formFile" class="form-label">Upload Images</label>
                                        <input class="form-control" name="images[]" type="file" id="formFile" multiple>
                                    </div>
                                </div>

                                <!-- Image Preview Section -->
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="form-label">Image Previews</label>
                                        <div id="imagePreview" class="d-flex flex-wrap gap-3"></div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                                    </div>
                                </div>

                                <!-- Consultation Time Slots -->
                                <div class="row mt-4 align-items-center">
                                    <div class="col-md-10">
                                        <h4 class="form-label">Consultation Timings</h4>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <button type="button" id="addSlot" class="btn btn-rounded btn-info">
                                            </span>Add Slot
                                        </button>
                                    </div>
                                </div>
                                
                                <div id="slotsContainer">
                                    <!-- First Time Slot (cannot be removed) -->
                                    <div class="row align-items-center mb-3">
                                        <div class="col-lg-3">
                                            <label for="timeslot-1" class="form-label">Time Slot</label>
                                            <input type="date" name="timeslots[]" class="form-control" id="timeslot-1">
                                        </div>
                                        <div class="col-lg-7">
                                            <label for="message-1" class="form-label">Message</label>
                                            <input type="text" name="messages[]" class="form-control" id="message-1" placeholder="Message">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Create Portfolio</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // Image Preview and Deletion
        $('#formFile').on('change', function (e) {
            const files = e.target.files;
            const previewContainer = $('#imagePreview');
            previewContainer.empty(); // Clear previous previews

            Array.from(files).forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function (event) {
                    const imgHtml = `
                        <div class="position-relative">
                            <img src="${event.target.result}" class="img-thumbnail" style="max-width: 150px;">
                            <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0" onclick="removeImage(${index})">&times;</button>
                        </div>
                    `;
                    previewContainer.append(imgHtml);
                };
                reader.readAsDataURL(file);
            });
        });

        window.removeImage = function (index) {
            const input = document.getElementById('formFile');
            const dt = new DataTransfer();
            const { files } = input;

            // Loop through files and reassign to input except the removed one
            for (let i = 0; i < files.length; i++) {
                if (i !== index) {
                    dt.items.add(files[i]);
                }
            }
            input.files = dt.files; // Update input files

            // Trigger change event to refresh the preview
            $('#formFile').trigger('change');
        };

        // Add Consultation Time Slots
        let slotCount = 1;
        $('#addSlot').on('click', function () {
            slotCount++;
            const slotHtml = `
                <div class="row align-items-center mb-3" id="slot-${slotCount}">
                    <div class="col-lg-3">
                        <label for="timeslot-${slotCount}" class="form-label">Time Slot</label>
                        <input type="date" name="timeslots[]" class="form-control" id="timeslot-${slotCount}">
                    </div>
                    <div class="col-lg-7">
                        <label for="message-${slotCount}" class="form-label">Message</label>
                        <input type="text" name="messages[]" class="form-control" id="message-${slotCount}" placeholder="Message">
                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-danger mt-4" onclick="removeSlot(${slotCount})">Remove</button>
                    </div>
                </div>
            `;
            $('#slotsContainer').append(slotHtml);
        });

        window.removeSlot = function (slotId) {
            $(`#slot-${slotId}`).remove();
        };

        // Form Submission with Preview Handling
        $('#portfolioCreateForm').on('submit', function (e) {
            e.preventDefault();
            handleFormUploadForm(
                'POST',
                '#portfolioCreateForm',
                '#submit',
                "{{ route('designer.portfolio.store') }}",
                "{{ route('designer.portfolio.index') }}"
            );
        });
    });
</script>
@endpush
