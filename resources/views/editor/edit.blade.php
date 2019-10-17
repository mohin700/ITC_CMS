@extends('layouts.app')


<!-- Page Title -->
@section('title', 'Create New Employee')

<!-- Custom Styles -->
@push('custom-style')
    <!-- Bootstrap Select Css -->
    <link href="{{asset('/back/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet"/>

@endpush

<!-- Page Heading  -->
@section('page-head', 'Update Customer Details')

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
                <h2>Enter Valid Customer Informations</h2>
            </div>
            <div class="body">
                <form id="form_validation" method="POST" action="{{ route('editor.update', $client->id) }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf

                <div class="row">
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="clients_name" value="{{ $client->clients_name }}" type="text" class="form-control">
                                <label class="form-label" >Clients Name*</label>
                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="cp_name" value="{{ $client->cp_name }}" type="rext" class="form-control" >
                                <label class="form-label" >Contact Person Name*</label>
                            </div>
                        </div>  
                    </div>

                </div>    

                <div class="row">
                   
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="cp_phone" value="{{ $client->cp_phone }}" type="text" class="form-control">
                                <label class="form-label" >Contact person Phone Number*</label>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" value="{{ $client->cp_email }}" class="form-control" name="cp_email" >
                                <label class="form-label" >Contact Person Email*</label>
                            </div>
                        </div>
                    </div>
                </div>    

                <div class="row">
                   
                    <div class="col-md-6">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input name="prospective" value="{{ $client->prospective }}" type="text" class="form-control">
                                <label class="form-label" >Prospective Project Name*</label>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" value="{{ $client->brief }}" class="form-control" name="brief" >
                                <label class="form-label" >Project Brief/Details*</label>
                            </div>
                        </div>
                    </div>
                </div>    



                <div class="row clearfix">
                    <div class="col-sm-4">
                        <select class="form-control show-tick" name="submission_type">
                            <option value="">-- Type of Submission* --</option>
                            <option {{ $client->submission_type == 'PPT-Technical'?'selected': ''  }} >PPT-Technical</option>
                            <option {{ $client->submission_type == 'Financial Quotation'?'selected': ''  }} >Financial Quotation</option>
                            <option {{ $client->submission_type == 'PPT with Sample'?'selected': ''  }} >PPT with Sample</option>
                            <option {{ $client->submission_type == 'Sample with quotation'?'selected': ''  }} >Sample with quotation</option>
                            <option {{ $client->submission_type == 'Other'?'selected': ''  }} >Other</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="work_type">
                            <option value="">-- Type of Work* --</option>
                            <option {{ $client->work_type == 'Event'?'selected': ''  }} >Event</option>
                            <option {{ $client->work_type == 'Activation'?'selected': ''  }} >Activation</option>
                            <option {{ $client->work_type == 'Gift Item'?'selected': ''  }} >Gift Item</option>
                        </select>
                    </div>                        
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line" id="bs_datepicker_container">
                                <input type="date" value="{{ $client->submission_date }}" name="submission_date" class="form-control" placeholder="select Submission Date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">

                    <div class="col-md-6">
                        <h3>Need to Tag Other Department</h3>
                        <div class="demo-checkbox">
                            <input type="checkbox" name="dep_planning" id="dep_planning" class="filled-in chk-col-green" {{ $client->dep_planning == 'on'?'checked': ''  }} />
                            <label for="dep_planning">Strategic Planning</label>
                            <input type="checkbox" name="dep_creative" id="dep_creative" class="filled-in chk-col-green" {{ $client->dep_creative == 'on'?'checked': ''  }} />
                            <label for="dep_creative">Creative</label>
                            <input type="checkbox" name="dep_operation" id="dep_operation" class="filled-in chk-col-green" {{ $client->dep_operation == 'on'?'checked': ''  }} />
                            <label for="dep_operation">Operation</label>
                            <input type="checkbox" name="dep_accounts" id="dep_accounts" class="filled-in chk-col-green" {{ $client->dep_accounts == 'on'?'checked': ''  }} />
                            <label for="dep_accounts">Accounts</label>
                            <input type="checkbox" name="dep_hr" id="dep_hr" class="filled-in chk-col-green" {{ $client->dep_hr == 'on'?'checked': ''  }} />
                            <label for="dep_hr">HR</label>
                            <input type="checkbox" name="dep_admin" id="dep_admin" class="filled-in chk-col-green" {{ $client->dep_admin == 'on'?'checked': ''  }} />
                            <label for="dep_admin">Admin</label>
                            <input type="checkbox" name="dep_it" id="dep_it" class="filled-in chk-col-green" {{ $client->dep_it == 'on'?'checked': ''  }} />
                            <label for="dep_it">IT</label>
                            <input type="checkbox" name="dep_Other" id="dep_Other" class="filled-in chk-col-green" {{ $client->dep_Other == 'on'?'checked': ''  }} />
                            <label for="dep_Other">Other</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Employee Details:</strong></p>
                        <table class="table table-striped">
                            <tbody>
                              <tr>
                                <td>Employee Name</td>
                                <td>: {{ $client->employee->first_name }} {{ $client->employee->last_name }}</td>
                              </tr>
                              <tr>
                                <td>Employee ID</td>
                                <td>: #{{ $client->employee->id }}</td>
                              </tr>
                              <tr>
                                <td>Designation</td>
                                <td>: {{ $client->employee->designation }}</td>
                              </tr>
                              <tr>
                                <td>Email:</td>
                                <td>: {{ $client->employee->email }}</td>
                              </tr>
                              <tr>
                                <td>Phone</td>
                                <td>: {{ $client->employee->phone }}</td>
                              </tr>
                            </tbody>
                        </table>
                        <input type="hidden" name="employeeID" value="{{$client->employee->id}}"> 
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

<script>

</script>




@endpush