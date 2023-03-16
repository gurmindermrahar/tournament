<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    {{-- bouncer validator --}}
    <link rel="stylesheet" href="{{url('assets/css/bouncer/style.css')}}">
    {{-- select2 --}}
    <link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">
    @stack('styles')

</head>
@php
  $user = Auth::user();
@endphp

<body class="{{ $user->admin_theme_mode == 'light' ? 'light-mode' : '' }}">
    <div class="container-scroller">
        @include('layouts.admin.sidebar');
        <div class="container-fluid page-body-wrapper">
            @include('layouts.admin.navbar');
            <div class="main-panel col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif
                <div class="content-wrapper grid_new_holder">
                    @yield('content')
                </div>
                @include('layouts.admin.footer')
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{url('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{url('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('assets/js/off-canvas.js')}}"></script>
    <script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('assets/js/misc.js')}}"></script>
    <script src="{{url('assets/js/settings.js')}}"></script>
    <script src="{{url('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{url('assets/js/dashboard.js')}}"></script>
    {{-- bouncer validator --}}
    <script src="{{url('assets/js/bouncerjs/bouncer.polyfills.js')}}" > </script>
    <script src="{{url('assets/js/bouncerjs/main.js')}}" > </script>
    {{-- select2 --}}
    <script src="{{url('assets/js/select2.min.js')}}" > </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    @stack('scripts')
    <!-- End custom js for this page -->

    <script>
        $(".admin_theme_mode").click(function(e){
            var mode = '';

            if ($(this).is(':checked')) {
                mode = 'dark';
                $('body').removeClass('light-mode');
            }else{
                mode = 'light';
                $('body').addClass('light-mode');
            }

            $.ajax({
                type:'get',
                url:"{{ url('admin/theme-mode') }}"+"/"+mode,
                success:function(data){

                }
            });
        });


    </script>
</body>
</html>
