@extends('admin.layouts.main-file')

@section('main-section')
<!-- Start Container Fluid -->
<div class="container-xxl">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Products List</h4>

                    <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary">
                        Add Product
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="productsTable" class="table table-striped">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Tags</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be populated via AJAX -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer border-top">
                    <div id="paginationControls" class="pagination-controls">
                        <!-- Custom pagination HTML will be injected here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Container Fluid -->
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#productsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("admin.products.index") }}',
                responsive: true,
                pageLength: 10,
                paging: false,
                columns: [
                    { data: 'id', name: 'id' },
                    {
                        data: 'product_image',
                        name: 'product_image',
                        render: function (data) {
                            // Check if 'data' is defined and not empty
                            const imageUrl = data ? '{{ env("ASSET2_URL") }}' + data : '{{ env("ASSET2_URL") }}/placeholder.png';

                            return '<div class="d-flex align-items-center gap-2">' +
                                '  <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">' +
                                '    <img src="' + imageUrl + '" alt="" class="avatar-md">' +
                                '  </div>' +
                                '</div>';
                        }
                    },
                    { data: 'name', name: 'name' },
                    { data: 'category_name', name: 'category_name' },
                    {data: 'price', name: 'price'},
                    {data: 'tags', name: 'tags'},
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center' }
                ],

                "drawCallback": function () {
                    $('#paginationControls').empty();
                    var api = this.api();
                    var info = api.page.info();

                    $('#paginationControls').append(`
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item ${info.page === 0 ? 'disabled' : ''}">
                                    <a class="page-link" href="#" aria-label="Previous" data-dt-idx="previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                ${Array.from({ length: info.pages }, (v, i) => `
                                    <li class="page-item ${info.page === i ? 'active' : ''}">
                                        <a class="page-link" href="#" data-dt-idx="${i}">${i + 1}</a>
                                    </li>
                                `).join('')}
                                <li class="page-item ${info.page === info.pages - 1 ? 'disabled' : ''}">
                                    <a class="page-link" href="#" aria-label="Next" data-dt-idx="next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    `);
                }
            });

            // Function to handle the status toggle change
            window.updateStatusToggle = function (element) {
                var id = $(element).val();
                var status = $(element).is(':checked') ? 1 : 0;

                updateStatus(
                    '{{ route("admin.products.status") }}',
                    id,
                    status
                );
            };
        });
    </script>
@endpush

@push('styles')
    <style>
        .pagination-controls {
            text-align: left;
            /* Align pagination to the left */
            padding: 10px;
            /* Add padding for spacing */
        }

        .pagination {
            display: inline-flex;
            border-radius: 0.25rem;
            padding-left: 0;
            list-style: none;
            border: 1px solid #dee2e6;
        }

        .page-item {
            margin: 0;
        }

        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin: 0;
            line-height: 1.25;
            color: #007bff;
            text-align: center;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .page-link:hover {
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
    </style>
@endpush