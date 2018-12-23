<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaraSchool</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-view/images/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin-view/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{ asset('admin-view/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('admin-view/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->

    @stack('styles')

</head>

<body class="adminbody">
    <div id="main">
        @include('layouts.partial.topnav')
        @include('layouts.partial.sidenav')
        @yield('content')
        @include('layouts.partial.footer')
    </div>

    <script src="{{ asset('admin-view/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('admin-view/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-view/js/moment.min.js') }}"></script>

    <script src="{{ asset('admin-view/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-view/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admin-view/js/detect.js') }}"></script>
    <script src="{{ asset('admin-view/js/fastclick.js') }}"></script>
    <script src="{{ asset('admin-view/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('admin-view/js/jquery.nicescroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin-view/js/pikeadmin.js') }}"></script>

    @stack('scripts')
</body>
</html>