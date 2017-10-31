<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ URL::to('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ URL::to('vendor2/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{ URL::to('css2/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Agent Login</div>
      <div class="card-body">
        <form method="post" action="{{ route('agent.login.submit') }}">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="hidden" name="_token" value="{{ Session::token() }}" >
          <input type="submit" class="btn btn-primary btn-block" value="Login">


          <div class="alert alert-danger" style="margin-top:10px;display: {{ (count($errors) > 0) ? "block" :"none" }}">
            @if(count($errors) > 0)
              @foreach ($errors->all() as $error)
                 <li> {{ $error }} </li>
              @endforeach
            @endif
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::to('vendor2/jquery/jquery.min.js')  }}"></script>
  <script src="{{ URL::to('vendor2/popper/popper.min.js') }}"></script>
  <script src="{{ URL::to('vendor2/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ URL::to('vendor2/jquery-easing/jquery.easing.min.js') }}"></script>
</body>

</html>
