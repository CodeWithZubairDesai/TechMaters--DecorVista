@extends('designer.layouts.layout')
@section('title')
Appointments
@endsection

@section('main-section')

		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex mb-3">
					<div class="mb-3 align-items-center me-auto">
						<h4 class="card-title">Consult Appointments</h4>
						<span class="fs-12">Here, Proffesional Interior Designers will view the consulation appointment requests</span>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive fs-14">
							<table class="table card-table display mb-4 dataTablesCard " id="example5">
								<thead>
									<tr>
										<th>#</th>
										<th>Time Slot</th>
										<th>Recipient</th>
										<th>Email</th>
										<th>Status</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example5').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("designer.appointments.index") }}',
            responsive: true,
            pageLength: 10,
            paging: false,
            columns: [
                { data: 'id', name: 'id' },
                { data: 'notes', name: 'notes' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false, class: 'text-center' } // For Edit button
            ],
            "drawCallback": function() {
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
         window.updateStatusToggle = function(element) {
            var id = $(element).val();
            var status = $(element).is(':checked') ? 1 : 0;

            updateStatus(
                '{{ route("designer.appointments.status") }}',
                id,
                status
            );
        };


    
</script>
@endpush