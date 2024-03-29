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
                <h2>
                    {{ $client->name }}
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('editor.edit', $client->id ) }}">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="single-child">

                    <div class="row">

                        <div class="col-md-12 py-3">

                            <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <td>Contact Person Name</td>
                                    <td><strong>: {{ $client->cp_name }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Phone Number</td>
                                    <td><strong>: {{ $client->cp_phone }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Email:</td>
                                    <td><strong>: {{ $client->cp_email }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Project Prospective</td>
                                    <td><strong>: {{ $client->prospective }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Project Brief</td>
                                    <td><strong>: {{ $client->brief }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Type of Submission</td>
                                    <td><strong>: {{ $client->submission_type }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Type of work</td>
                                    <td><strong>: {{ $client->work_type }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Submission Date</td>
                                    <td><strong>: {{ $client->submission_date }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Submited By</td>
                                    <td><strong>: {{ $client->employee->first_name }} {{ $client->employee->last_name }}</strong></td>
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