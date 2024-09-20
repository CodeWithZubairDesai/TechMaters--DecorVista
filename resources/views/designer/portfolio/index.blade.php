@extends('designer.layouts.layout')

@section('title', 'Portfolios')

@section('main-section')
<div class="content-body">
    <div class="container-fluid">
        <div class="d-flex mb-3">
            <div class="mb-3 align-items-center me-auto">
                <h4 class="card-title">Portfolios</h4>
                <span class="fs-12">List of your portfolios with consultants</span>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Payments Queue</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong>#</strong></th>
                                <th><strong>Title</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>email</strong></th>
                                <th><strong>Description</strong></th>
                                <th><strong>Time slot</strong></th>
                                <th class="text-end"><strong>Action</strong></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $p)
                            <tr>
                                <td><strong>{{$p->id}}</strong></td>
                                <td>{{$p->title}}</td>
                                <td>{{$p->designer->name}}</td>
                                <td>{{$p->designer->email}}</td>
                                <td>{{$p->description}}</td>
                                @foreach($p->consultants as $consultant)
                                <td>{{$consultant->available_at}}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush