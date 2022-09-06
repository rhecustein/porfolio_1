<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('source/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('source/assets/plugins/pace/pace.css') }}" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="{{ asset('source/assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/assets/css/custom.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('source/assets/images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('source/assets/images/neptune.png') }}" />

</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="sign-up.html">Sign Up</a></p>
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" name="email" :value="old('email')" required autofocus>

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password"
                                required autocomplete="current-password">
            </div>

            <div class="auth-submit">
               <button type="submit" class="btn btn-primary">Sign</button>
                <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
            </div>
            </form>
            <div class="divider"></div>
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
                <a href="#" class="auth-alts-twitter"></a>
            </div>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="{{ asset('source/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('source/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('source/assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('source/assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/main.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/custom.js') }}"></script>
</body>
</html>
