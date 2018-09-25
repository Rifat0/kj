    <!-- Start Head --> 
        @include ('admin.layouts.head')
    
    <!-- Start Navigation -->
        @include ('admin.layouts.nav')

    <!-- Start Content -->
        @yield('content')
            
    <!-- Start footer -->
        @include ('admin.layouts.footer')