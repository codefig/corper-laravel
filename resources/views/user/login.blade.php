@extends('layouts.header')


@section('title')
    Corper's Login
@endsection



@section('styles')
  <style type="text/css">
  	#loginBody{
  		/*background-color:red;*/
  		width:500px;
  		margin-top:50px;
  		border-radius: 5px;
  		padding:10px;
  		border:1px solid #00b294;
  	}

  	#lectureSubmit{
  		background-color:#00b294 !important;
  		border-color:#fff;
  	}
  </style>

@endsection


@section('pageBody')

			<center>
		<div class="container" id="loginBody">
					<form method="post" action="{{ route('user.login.submit') }}">

					<div class="form-group">
						<span class="fa fa-institution fa-4x">Corper's Login</span>
					</div>

				<div class="form-group">
						<label> E-mail </label>
						<input type="text" class="form-control" id='email' name="email" placeholder="student@gmail.com" />
				</div>


				<div class="form-group">
					<label> Password </label>
					<input type="password" class='form-control' id="password" name="password" placeholder="************" />
				</div>


				<div class="form-group">
					<input type="hidden" name="_token" value="{{ Session::token() }}" />
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" id="submit" value="Login" />
				</div>

				</form>


				<div class="alert alert-danger">
					@if(count($errors) > 0)
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					@endif
				</div>
		</div>
			</center>

@endsection


