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
    <div class="row">
        <div class="col-sm-3">
        </div>
    <div class="col-sm-6" text-center loginscreen animated fadeInDown">
        <div>
            
            <h2>Vendor Sing up.</h2>
            @include('Admin.Layouts.message')
            <form method="POST" action="{{ url('vendore/sing_up') }}">
                        @csrf
                <div class="col-sm-6">
                    <div class="form-group">

                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name" >
                      
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="vendor_type" value="{{ old('vendor_type') }}" placeholder="Enter Vendor Type" >
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">

                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" >
                      
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" name="password" placeholder="Password" >
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmed Password" >
                    </div>
                </div>

                <button class="btn btn-primary block full-width m-b">Sing up</button>

               <!--  <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
        </div>
    </div>
    <div class="col-sm-3">
        </div>
</div>
</div>
</div>


    <!-- Mainly scripts -->
    <script src="{{ asset('public/backend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>

</body>

</html>