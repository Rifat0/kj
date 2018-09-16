    <!-- Start Head --> 
        @include ('Admin.layouts.head')
    
    <!-- Start Navigation -->
        @include ('Admin.layouts.nav')

    <!-- Start Content -->
        @yield('content')
            
    <!-- Start footer -->
        @include ('Admin.layouts.footer')