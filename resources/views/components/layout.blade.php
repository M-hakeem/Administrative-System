<x-head/>

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
