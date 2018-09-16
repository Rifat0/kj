    <!-- Start Head --> 
        @include ('vendor.layouts.head')
    
    <!-- Start Navigation -->
        @include ('vendor.layouts.nav')

    <!-- Start Content -->
        @yield('content')
            
    <!-- Start footer -->
        @include ('vendor.layouts.footer')