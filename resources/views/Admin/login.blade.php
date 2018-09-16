<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Vendor <?php if($segment = Request::segment(0)) { echo "| ";  echo str_replace('_', ' ', ucfirst($segment)); } if($segment = Request::segment(2)) { echo "| ";  echo str_replace('_', ' ', ucfirst($segment)); } if($segment = Request::segment(3)) { echo " | ";  echo str_replace('_', ' ', ucfirst($segment)); } ?></title>

    <link href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/style.css') }}" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">K</h1>

            </div>
            <h2>Login in. To see it in action.</h2>
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                    @if(@$error)
                <div class="form-group">
                
                  
                  <div class="alert alert-danger">
                    
                  </div>

                <div class="alert alert-danger">
                </div>
                @endif
                <div class="form-group">

                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" required>
                  
                </div>
                <div class="form-group">

                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <button class="btn btn-primary block full-width m-b">Login</button>

               <!--  <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
        </div>
    </div>
</div>
</div>


    <!-- Mainly scripts -->
    <script src="{{ asset('public/backend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>

</body>

</html>