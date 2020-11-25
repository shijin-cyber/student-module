<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V8</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logvendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logfonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logvendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="logvendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logvendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logvendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="logvendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="logcss/util.css">
    <link rel="stylesheet" type="text/css" href="logcss/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title">
                        Log In
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter E mail">
                        <input id="email" class="input100"type="email" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus>
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1">
                            Forgot
                        </span>

                        <a href="#" class="txt2">
                            Username / Password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Log in
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
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
    <script src="logvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="logvendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="logvendor/bootstrap/js/popper.js"></script>
    <script src="logvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="logvendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="logvendor/daterangepicker/moment.min.js"></script>
    <script src="logvendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="logvendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="logjs/main.js"></script>

</body>
</html>