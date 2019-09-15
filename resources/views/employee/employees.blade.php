@extends('layouts.app')


<!-- Page Title -->
@section('title', 'Dashboard')

<!-- Custom Styles -->
@push('custom-style')

<!-- JQuery DataTable Css -->
<link href="{{ asset('back/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
   
@endpush

<!-- Main Content Area -->
@section('main-content-area')
<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @include('parts.message')
        <div class="card">
            <div class="header">
                <h2>
                    All Employees 
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	@foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->employeeID }} </td>
                                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                <td>{{ $employee->designation }}</td>
                                <td>{{ $employee->phone }}</td>                                
                                <td><a href="{{ route('employee.show', $employee->id) }}">View</a></td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->

@endsection



<!-- Custom Scripts -->
@push('custom-scripts')

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('back/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('back/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

<!-- Custom Js -->
 <script src="{{asset('back/js/pages/tables/jquery-datatable.js')}}"></script>

   
@endpush