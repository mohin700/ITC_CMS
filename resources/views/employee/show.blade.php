@extends('layouts.app')


<!-- Page Title -->
@section('title', 'Dashboard')

<!-- Custom Styles -->
@push('custom-style')
<style>
  img{max-width: 100%;}
.name {
    color: #F1C232;
    font-size: 3.5em;
    line-height: 100%;
}
.dream {
    font-size: 2em;
    padding-top: 15px;
    line-height: 110%;
    padding-bottom: 15px;
}

.meta-area div {
    display: inline-block;
    margin-right: 15px;
}
.meta-area div i {color: coral;}

.meta-area {
    background: #fff;
    border: 1px solid #f4d785;
    display: inline-block;
    border-radius: 2px;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
}
.About .title {
    font-size: 20px;
    font-weight: 600;
    color: #f1c232;
    text-transform: uppercase;
}
</style>


<!-- JQuery DataTable Css -->
<link href="{{ asset('back/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
   
@endpush

<!-- Main Content Area -->
@section('main-content-area')

<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <p><a class="btn btn-success" href="{{ URL::previous() }}">Go Back</a></p>
                <h2>
                    {{ $employee->first_name }} {{ $employee->last_name }}
                </h2>

                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('employee.edit', $employee->id ) }}">Edit Profile</a></li>
                            <li><a onclick="return confirm('Are you sure you want to Remove?');" href="{{ route('employee.destroy', $employee->id ) }}">Delete profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="single-child">

                    <div class="row">

                        <div class="col-md-8 py-3">

                            <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <td>Employee ID:</td>
                                    <td><mark>#{{ $employee->employeeID }}</mark></td>
                                  </tr>
                                  <tr>
                                    <td>Designation:</td>
                                    <td><mark>{{ $employee->designation }}</mark></td>
                                  </tr>
                                  <tr>
                                    <td>Email:</td>
                                    <td><mark>{{ $employee->email }}</mark></td>
                                  </tr>
                                  <tr>
                                    <td>Phone:</td>
                                    <td><mark>{{ $employee->phone }}</mark></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div> 

                    </div> <!-- End of .row -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->

@endsection



<!-- Custom Scripts -->
@push('custom-scripts')

   
@endpush