@extends('layouts.app')


<!-- Page Title -->
@section('title', 'Editor Dashboard')

<!-- Custom Styles -->
@push('custom-style')

<!-- JQuery DataTable Css -->
<link href="{{ asset('back/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endpush

<!-- Page Heading  -->
@section('page-head')

<!-- Main Content Area -->
@section('main-content-area')

<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ALL CUSTOMER
                </h2>
<!--                 <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul> -->
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable customer-table table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sub. Date</th>
                                <th>Client Name</th>
                                <th>Contact Person</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Project Name</th>
                                <th>Type of Submission</th>
                                <th>TType of work</th>
                                <th>Submitted By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Sub. Date</th>
                                <th>Client Name</th>
                                <th>Contact Person</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Project Name</th>
                                <th>Type of Submission</th>
                                <th>TType of work</th>
                                <th>Submitted By</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->created_at }}</td>
                                <td>{{ $customer->clients_name }}</td>
                                <td>{{ $customer->cp_name }}</td>
                                <td>{{ $customer->cp_email }}</td>
                                <td>{{ $customer->cp_phone }}</td>
                                <td>{{ $customer->prospective }}</td>
                                <td>
                                    {{ $customer->submission_ppt_tech == 'on'? 'PPT-Technical, ':'' }}
                                    {{ $customer->submission_fainancial_quotation == 'on'? 'Financial Quotation, ': '' }}
                                    {{ $customer->submission_ppt_with_sample == 'on'? 'PPT with Sample, ': '' }}
                                    {{ $customer->submission_with_quotation == 'on'? 'Sample with quotation, ':''  }}
                                    {{ $customer->submission_other }}
                                </td>
                                <td>
                                    {{ $customer->work_event == 'on'? 'Event, ' :'' }}
                                    {{ $customer->work_activation == 'on'? 'Activation, ' :'' }}
                                    {{ $customer->work_gift_item  == 'on'? 'Gift Item' :'' }}                                    
                                </td>
                                <td>{{ $customer->employee->first_name }} {{ $customer->employee->last_name }}</td>
                                <td><a href="{{ route('viewer.show', $customer->id) }}"><i class="material-icons">remove_red_eye</i></a></td>
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