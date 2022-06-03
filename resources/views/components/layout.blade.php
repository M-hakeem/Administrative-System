<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" />
    <!-- FORM STYLES-->
    <link rel="stylesheet" href="{{ asset('css/formstyle.css') }}" type="text/css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

    <div id="wrapper">
        <x-header />
        <!-- /. NAV TOP  -->
        <x-sidebar />
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            {{ $slot }}
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <x-footer />

    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('/js/jquery-1.10.2.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('/js/custom.js') }}"></script>
    <x-alert />
</body>

</html>
