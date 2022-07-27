<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/app/adminlte.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/app/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/app/ionicons.min.css') }}" />
    <title>Vue Datatables</title>
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->




    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('backend/js/app/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/app/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/app/adminlte.min.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    @yield('modal')
    @yield('scripts')
</html>