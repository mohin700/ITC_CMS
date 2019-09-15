@extends('layouts.app')


<!-- Page Title -->
@section('title', 'Create User')

<!-- Custom Styles -->
@push('custom-style')
    <!-- Bootstrap Select Css -->
    <link href="/back/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />


@endpush

<!-- Page Heading  -->
@section('page-head', 'CREATE NEW USER')

<!-- Main Content Area -->
@section('main-content-area')

<div class="row clearfix">
    @include('parts.message')
</div>

<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Enter Valid User Informations</h2>
            </div>
            <div class="body">
                <form id="form_validation" method="POST" action="{{ route('admin.user.store') }}" >
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" >
                                <label class="form-label" >Name*</label>
                            </div>
                        </div>  
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" >
                                <label class="form-label" >Email*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <select class="form-control show-tick" name="role" >
                                <option value="">-- Select Role --</option>
                                <option value="1">Admin</option>
                                <option value="2">Editor</option>
                                <option value="3">Viewer</option>
                            </select>
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" id="password" >
                                <label class="form-label">Password*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password_confirmation" >
                                <label class="form-label">Confirm Password*</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->


@endsection


<!-- Custom Scripts -->
@push('custom-scripts')



@endpush