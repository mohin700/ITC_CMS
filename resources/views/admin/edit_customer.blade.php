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
                <form id="form_validation" method="POST" action="{{ route('admin.customer.update', $client->id) }}" enctype="multipart/form-data" autocomplete="off">
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
                        <label>Type of Submission *</label>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="submission_ppt_tech" class="custom-control-input" id="submission_ppt_tech" {{ $client->submission_ppt_tech == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="submission_ppt_tech">PPT-Technical</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="submission_fainancial_quotation" name="submission_fainancial_quotation" {{ $client->submission_ppt_tech == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="submission_fainancial_quotation">Financial Quotation</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="submission_ppt_with_sample" name="submission_ppt_with_sample" {{ $client->submission_ppt_tech == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="submission_ppt_with_sample">PPT with Sample</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="submission_with_quotation" name="submission_with_quotation" {{ $client->submission_with_quotation == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="submission_with_quotation">Sample with quotation</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="submission_other" {{ $client->submission_other !== Null? 'checked': ''  }}>
                          <label class="custom-control-label" for="submission_other">Other</label>
                        </div>


                        <input  type="text" class="form-control" id="submission_other_box" name="submission_other" placeholder="Enter Other Type" >

                    </div>
                    <div class="col-sm-4">
                        <label>Type of work *</label>


                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="work_event" class="custom-control-input" id="work_event" {{ $client->work_event == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="work_event">Event</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="work_activation" name="work_activation" {{ $client->work_activation == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="work_activation">Activation</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="work_gift_item" name="work_gift_item" {{ $client->work_gift_item == 'on'? 'checked': ''  }}>
                          <label class="custom-control-label" for="work_gift_item">Gift Item</label>
                        </div>

                    </div>                        
                    <div class="col-sm-4">
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
  $('#submission_other').click(function() {

      if( $(this).is(':checked')) {

          $("#submission_other_box").show();
          document.querySelector('#submission_other_box').required = true;
      } else {
          $("#submission_other_box").hide();
          document.querySelector('#submission_other_box').required = false;
      }

  }); 
</script>



@endpush