@extends('InteriorDesignerDashboard.layouts.layout')

@section('main-section')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Portfolio</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Portfolio</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('portfolio') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
<!-- 
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Upload Image</label>
                                            <input class="form-control" name="images" type="file" id="formFile">
                                        </div>
                                    </div> -->

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" rows="7" id="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Consultations Timings</h4>
                    <button type="button" class="btn btn-rounded btn-info"><span
                            class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add Slots</button>
                </div>
                <div class="card-body">
                    <div class="basic-form">
         
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="timeslot" class="form-label">Time Slot</label>
                                    <input type="date" name="timeslot" class="form-control" placeholder="Time Slot">
                                </div>
                                <div class="col-sm-4">
                                    <label for="message" class="form-label">Message</label>
                                    <input type="text" name="msg" class="form-control" placeholder="Message">
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-danger">Remove <span class="btn-icon-end"><i class="fa fa-close"></i></span></button>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Create Portfolio</button>

</form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection