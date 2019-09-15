
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
        .min-height{
          min-height: 84vh;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/form-validation.css') }}" rel="stylesheet">
  </head>
  <body class="bg-light">
  <div class="container min-height">
  <div class="py-3 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('front/img/logo.png') }}" alt="" >
    <h2>Innovative Creation Limited</h2>
    <p class="lead">Client Visit Report Submission</p>
    <hr class="mb-3">
  </div>


  <div class="row">
    <div class="col-md-12">


      <form action="{{ route('welcome.submit') }}" method="POST">
        <div class="form-row align-items-center">
          @csrf
          <div class="col-auto col-sm-3 my-1 offset-md-4">
            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">#</div>
              </div>
              <input type="text" name="employeeID" class="form-control" id="inlineFormInputGroupUsername" placeholder="Employee ID">
            </div>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>

      <div class="text-center">@include('parts.message')</div>

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
