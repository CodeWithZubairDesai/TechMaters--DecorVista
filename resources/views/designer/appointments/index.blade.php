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
                    <table id="productCategoriesTable" class="table table-striped">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>#</th>
                                <th>Time Slot</th>
                                <th>Recipient</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th >Action</th> <!-- Added Action column -->
                                <th >Action</th> <!-- Added Action column -->
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($Appointments as $ap)
                          <tr>
                            <td>{{$ap->id}}</td>
                            <td>{{$ap->consultant->available_at}}</td>
                            <td>{{$ap->user->name}}</td>
                            <td>{{$ap->user->email}}</td>
                            <td>{{$ap->status}}</td>
                            <td><a href="">Edit</a></td>
                            <td><a href="">Cancel</a></td>
                          </tr>
                          @endforeach
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

