<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #999;
	background: #f3f3f3;
	font-family: "Muli-Regular";
	src: url("../fonts/muli/Muli-SemiBold.ttf");
}
.form-control {
	border-color: #eee;
	min-height: 41px;
	box-shadow: none !important;
}
.form-control:focus {
	border-color: #57B846;
}
.form-control, .btn {
	border-radius: 3px;
}
.signup-form {
	width: 500px;
	margin: 0 auto;
	padding: 30px 0;
}
.signup-form h2 {
	color: BLACK;
	margin: 0 0 30px 0;
	display: inline-block;
	padding: 0 30px 10px 0;
	border-bottom: 3px solid #57B846;

}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group row {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 14px;
	line-height: 2;
}
.signup-form input[type="checkbox"] {
	position: relative;
	top: 1px;
}
.signup-form .btn {
	font-size: 16px;
	font-weight: bold;
	color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  font-size: 15px;
  letter-spacing: 2px;
	background: #57B846;
	border: none;
	margin-top: 20px;
	min-width: 140px;
}

.signup-form .btn:hover, .signup-form .btn:focus {
	background: #57B846;
	outline: none !important;
}
.signup-form a {
	color: #57B846;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #57B846;
	text-decoration: none;
}
.signup-form form a:hover {
	text-decoration: underline;
}

</style>
</head>
<body>
<div class="signup-form" border=".rounded-sm ">

      <form method="POST" class="form-horizontal" action="{{ route('register') }}">
          @csrf
        <div class="row">
        	<div class="col-8 offset-4" >
				<h2>Revue Sign Up</h2>
			</div>
      	</div>
        <div class="form-group row">
            <label for="name" class="col-form-label col-4">{{ __('Name') }}</label>

            <div class="col-8">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
			<label class="col-form-label col-4">Username</label>
			<div class="col-8">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" required autocomplete="username">
								@error('username')
										<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
								@enderror
						</div>
        </div>
		<div class="form-group row">
      <label for="email" class="col-form-label col-4">{{ __('E-Mail Address') }}</label>
			<div class="col-8">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-form-label col-4">{{ __('Password') }}</label>

            <div class="col-8">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-form-label col-4">{{ __('Confirm Password') }}</label>

            <div class="col-8">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row">
    			<div class="col-8 offset-4">
              <p><label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
                <button type="submit" class="btn btn-primary btn-lg">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="#">Login here</a></div>
</div>
</body>
</html>
