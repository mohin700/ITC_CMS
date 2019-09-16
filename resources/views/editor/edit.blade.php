
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/form-validation.css') }}" rel="stylesheet">
  </head>
  <body class="bg-light">
  <div class="container">
  <div class="py-3 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('front/img/logo.png') }}" alt="" >
    <h2>Innovative Creation Limited</h2>
    <p class="lead">Client Visit Report Submission</p>
    <hr class="mb-3">
  </div>


  <div class="row">

    <div class="col-md-12">
      
      <form class="needs-validation" novalidate method="POST" action="{{ route('clientrecord') }}">
        @csrf

        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="ClientsName">Clients Name</label>
            <input type="text" class="form-control" id="ClientsName" name="clients_name" required>
            <div class="invalid-feedback">
              Valid clients name is required.
            </div>
          </div>

          <div class="mb-3 col-md-6">
            <label for="cp_name">Contact Person Name</label>
            <input type="text" class="form-control" id="cp_name" name="cp_name" required>
            <div class="invalid-feedback">
              Valid contact person name is required.
            </div>
          </div>
        </div>

        <div class="row">

          <div class="mb-3 col-md-6">
            <label for="cp_phone">Contact person Phone Number</label>
            <input type="text" class="form-control" id="cp_phone" name="cp_phone" required>
            <div class="invalid-feedback">
              Valid contact person phone nmber is required.
            </div>
          </div>

        <div class="mb-3 col-md-6">
          <label for="cp_email">Contact Person Email</span></label>
          <input type="email" class="form-control" name="cp_email" id="cp_email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Valid contact person phone nmber is required.
          </div>
        </div>
      </div>

        <div class="mb-3">
          <label for="prospective">Prospective Project Name</label>
          <input type="text" class="form-control" id="prospective" name="prospective" required>
          <div class="invalid-feedback">
            Prospective Project Name is required.
          </div>
        </div>

        <div class="mb-3">
          <label for="brief">Project Brief/Details</label>
          <input type="text" class="form-control" id="brief" name="brief" required>
          <div class="invalid-feedback">
            Project Brief/Details is required.
          </div>
        </div>

        <div class="row">

          <div class="col-md-4 mb-3">
            <label for="submission_type">Type of Submission *</label>
            <select class="custom-select d-block w-100" id="submission_type" name="submission_type" required>
              <option value="">Choose...</option>
              <option>PPT-Technical</option>
              <option>Financial Quotation</option>
              <option>PPT with Sample</option>
              <option>Sample with quotation</option>
              <option>Other</option>
            </select>
            <div class="invalid-feedback">
              Please select Type of Submission.
            </div>
          </div>          

          <div class="col-md-4 mb-3">
            <label for="work_type">Type of work *</label>
            <select class="custom-select d-block w-100" id="work_type" name="work_type" required>
              <option value="">Choose...</option>
              <option>Event</option>
              <option>Activation</option>
              <option>Gift Item</option>
            </select>
            <div class="invalid-feedback">
              Please select Type of work.
            </div>
          </div>

          <div class="mb-3 col-md-4">
            <label for="submission_date">Submission Date</label>
            <input type="date" class="form-control" id="submission_date" name="submission_date" required>
            <div class="invalid-feedback">
              Submission Date is required.
            </div>
          </div>

        </div>


        <hr class="my-4">
        <div class="row">
        <div class="col-md-6">
          <h3>Need to Tag Other Department</h3>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="dep_planning" class="custom-control-input" id="dep_planning">
            <label class="custom-control-label" for="dep_planning">Strategic Planning</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_creative" name="dep_creative">
            <label class="custom-control-label" for="dep_creative">Creative</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_operation" name="dep_operation">
            <label class="custom-control-label" for="dep_operation">Operation</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_accounts" name="dep_accounts">
            <label class="custom-control-label" for="dep_accounts">Accounts</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_hr" name="dep_hr">
            <label class="custom-control-label" for="dep_hr">HR</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_admin" name="dep_admin">
            <label class="custom-control-label" for="dep_admin">Admin</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_it" name="dep_it">
            <label class="custom-control-label" for="dep_it">IT</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="dep_Other" name="dep_Other">
            <label class="custom-control-label" for="dep_Other">Other</label>
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
            <input type="hidden" name="employeeID" value="{{$client->id}}">
      </div> 


      </div>
        <hr class="mb-4">

        
        <button class="btn btn-success btn-lg btn-block" type="submit">Submit Records</button>
      </form>
    </div>
  </div> 
</div><!-- end of .container -->

<div class="mt-5">
  <div class="container-fluid bg-dark">
    <div class="row">
      <div class="col-md-12">
        <footer class="py-3 text-muted text-center text-small">
          <p class="mb-1">Copyright © 2019 ICreation. All Rights Reserved.</p>
        </footer>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/js/form-validation.js') }}"></script>
</body>
</html>
