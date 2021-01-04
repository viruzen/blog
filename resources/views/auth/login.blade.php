<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('cauth/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('cauth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('cauth/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cauth/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cauth/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cauth/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cauth/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cauth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('cauth/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
          <form method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="{{ route('login') }}">
              @csrf
					<span class="login100-form-title">
						Sign In
					</span>


          <div class="form-group row">
              <label for="login" class="col">{{ ('E-Mail Address / Username') }}</label>

              <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                  <input id="login" type="text" class="input100 {{ $errors->has('username') || $errors->has('email') ? 'is-invalid' : '' }}" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

                  @if($errors->has('username') || $errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row">
              <label for="password" class="col-md-4 ">{{ __('Password') }}</label>

              <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                  <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          @if (Route::has('password.request'))
          <div class="text-right p-t-13 p-b-23">
            <span class="txt1">
              Forgot
            </span>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
          </div>
          @endif


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-20 p-b-20">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="{{asset('cauth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cauth/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cauth/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('cauth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cauth/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cauth/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('cauth/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cauth/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cauth/js/main.js')}}"></script>

</body>
</html>
