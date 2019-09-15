@extends('layouts.app')


<!-- Page Title -->
@section('title', 'Create User')

<!-- Custom Styles -->
@push('custom-style')
    <!-- Bootstrap Select Css -->
    <link href="{{asset('/back/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet"/>


    <!-- Bootstrap DatePicker Css -->
     <link href="{{asset('/back/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet"/>    



@endpush

<!-- Page Heading  -->
@section('page-head', 'Add New Child')

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
                <h2>Enter Valid Child Informations</h2>
            </div>
            <div class="body">
                <form id="form_validation" method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf

                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="employeeID" type="text" class="form-control">
                                <label class="form-label" >Employee ID*</label>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="email" type="email" class="form-control" >
                                <label class="form-label" >Employee Email*</label>
                            </div>
                        </div>  
                    </div>

                </div>    

                <div class="row">
                   
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="phone" type="text" class="form-control">
                                <label class="form-label" >Phone Number*</label>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-6">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="designation" >
                                <label class="form-label" >Designation*</label>
                            </div>
                        </div>
                        
                    </div>

                </div>    

                <div class="row clearfix">

                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="first_name" >
                                <label class="form-label" >First Name*</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="last_name" >
                                <label class="form-label" >Last Name*</label>
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

<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{asset('/back/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>




@endpush