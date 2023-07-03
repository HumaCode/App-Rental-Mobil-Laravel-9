<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend') }}/images/favicon.png">
    <link href="{{ asset('backend') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @include('backend.layouts.nav')

        @include('backend.layouts.header')


        @include('backend.layouts.sidebar')

        <div class="content-body">
            <div class="container-fluid">

                @yield('heading')

                @yield('content')

            </div>
        </div>

        @include('backend.layouts.footer')
    </div>

    <!-- Required vendors -->
    <script src="{{ asset('backend') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('backend') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('backend') }}/js/custom.min.js"></script>

    <script src="{{ asset('backend') }}/vendor/chartist/js/chartist.min.js"></script>
    <!-- App js-->
    <script src="{{ asset('backend') }}/js/validate.min.js"></script>

    <script src="{{ asset('backend') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('backend') }}/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="{{ asset('backend') }}/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
    </script>

    @stack('scripts')

</body>

</html>