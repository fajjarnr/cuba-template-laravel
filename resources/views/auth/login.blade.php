<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("assets/images/favicon.png")}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}" type="image/x-icon">
    <title>Smart Tourism Pemalang</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/fontawesome.css")}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/icofont.css")}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/themify.css")}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/flag-icon.css")}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/feather-icon.css")}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/prism.css")}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/vendors/bootstrap.css")}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    <link id="color" rel="stylesheet" href="{{asset("assets/css/color-1.css")}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/responsive.css")}}">
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-light"
                                    src="{{asset("assets/images/logo/login.png")}}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{asset("assets/images/logo/logo_dark.png")}}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form method="POST" action="{{ route('login') }}" class="theme-form">
                                @csrf

                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="test@gmail.com" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input id="password" type="password" class="form-control" required autocomplete="
                                        current-password" placeholder="*********">

                                    <div class="show-hide"><span class="show"> </span></div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="text-muted" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    @endif

                                    <button class="btn btn-primary btn-block my-5" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- latest jquery-->
        <script src="{{asset("assets/js/jquery-3.5.1.min.js")}}"></script>
        <!-- Bootstrap js-->
        <script src="{{asset("assets/js/bootstrap/popper.min.js")}}"></script>
        <script src="{{asset("assets/js/bootstrap/bootstrap.js")}}"></script>
        <!-- feather icon js-->
        <script src="{{asset("assets/js/icons/feather-icon/feather.min.js")}}"></script>
        <script src="{{asset("assets/js/icons/feather-icon/feather-icon.js")}}"></script>
        <!-- Sidebar jquery-->
        <script src="{{asset("assets/js/config.js")}}"></script>
        <!-- Theme js-->
        <script src="{{asset("assets/js/script.js")}}"></script>
        <!-- login js-->
        <!-- Plugin used-->
</body>

</html>