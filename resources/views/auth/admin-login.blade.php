<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset ('/css/login_style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Athiti:400,200,300,500,600,700' rel='stylesheet' type='text/css'> 
<!-- //web font -->
<!-- App favicon -->
        <link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
    <!-- main -->
    <div class="main-agile">
        <h1>eCommerce Admin Panel Login</h1>
        <div id="w3ls_form" class="signin-form">
            <!-- Sign In Form -->
            <form role="form" id="signin" method="POST" action="{{ route('admin-login') }}">
                        {{csrf_field()}}
                <h2>Sign In Form</h2>

                <p>User Name </p>
                    <input id="email" type="text" name="email" value="{{ old('email') }}" required >
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                <p>Password</p>
                <input id="password" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    
                <br><br>
                <input type="submit" value="SIGN IN">
            </form>
            <!-- //Sign In Form -->
        </div>
        <!-- copyright -->
        <div class="copyright">
            <p> © 2017 | All rights reserved </p>
        </div>
        <!-- //copyright -->  
    </div>  
    <!-- //main -->

    <!-- jS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script> 
    <!-- //js -->
</body>
</html>