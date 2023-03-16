<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pixel') }}</title>

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/css/icon.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/sweetalert2.min.css')}}">

    @stack('styles')

</head>
@php
$user = auth()->user();
@endphp
<body>
    <!-- Header -->
    @include('layouts.frontend.navbar')

    {{-- Banner --}}

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

    @yield('content')
    @include('layouts.frontend.footer')

    <script src="{{url('assets/frontend/js/jquery.slim.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{url('assets/js/sweetalert2.all.min.js')}}"></script>


    <script>
        function alertMessage (title,swalCallback)
        {
            swal({
                title:title,
                // text: text,
                // type: type,
                // showCancelButton: true,
                // confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                // confirmButtonText: "{{__('message.Yes,_delete_it!')}}"
            }).then((willDelete) => {
                swalCallback();
                // if (willDelete.value) {
                //
                // } else {
                //     swal("Something Wrong");
                // }
         });
        }
    </script>

    @stack('scripts')

</body>
</html>
