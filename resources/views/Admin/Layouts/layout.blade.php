    <!-- Start Head --> 
        @include ('Admin.Layouts.head')
    
    <!-- Start Navigation -->
        @include ('Admin.Layouts.nav')

    <!-- Start Content -->
        @yield('content')
            
    <!-- Start footer -->
        @include ('Admin.Layouts.footer')