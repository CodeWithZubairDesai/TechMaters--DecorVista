@extends('InteriorDesignerDashboard.layouts.layout')

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
										<th>Time Slot</th>
										<th>Recipient</th>
										<th>Email</th>
										<th>Status</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="text-black text-nowrap">#June 1, 2020</span></td>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
												</div>
											</div>
										</td>
										<td><span class="text-black">xyzstore@mail.com</span></td>
										<td><a href="javascript:void(0)" class="btn  btn-sm btn-success light">Completed</a></td>
										<td class="text-end">
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
												<form method="GET" action="/interiordesignerappointmentsreviews">
														<button type="submit" class="dropdown-item">Check Reviews</button>
                                                	</form>
													<button class="dropdown-item" href="/deleteconsultation">Cancel</button>
													<button class="dropdown-item" href="/editconsultationstatus">Set to Complete</button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><span class="text-black text-nowrap">#June 1, 2020</span></td>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Kevin Samuel</h6>
												</div>
											</div>
										</td>
										<td><span class="text-black">kevin@mail.com</span></td>
										<td><a href="javascript:void(0)" class="btn btn-sm btn-warning light">Pending</a></td>
										<td class="text-end">
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
												<form method="GET" action="/interiordesignerappointmentsreviews">
														<button type="submit" class="dropdown-item">Check Reviews</button>
                                                	</form>
													<button class="dropdown-item" href="javascript:void(0);">Cancel</button>
													<button class="dropdown-item" href="javascript:void(0);">Set to Complete</button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><span class="text-black text-nowrap">#June 1, 2020</span></td>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Jons Sitepu</h6>
												</div>
											</div>
										</td>
										<td><span class="text-black">jons@mail.com</span></td>
										<td><a href="javascript:void(0)" class="btn btn-sm btn-danger light">Canceled</a></td>
										<td class="text-end">
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<form method="GET" action="/interiordesignerappointmentsreviews">
														<button type="submit" class="dropdown-item">Check Reviews</button>
                                                	</form>
													<button class="dropdown-item" href="javascript:void(0);">Cancel</button>
													<button class="dropdown-item" href="javascript:void(0);">Set to Complete</button>
												</div>
											</div>
										</td>
									</tr>
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