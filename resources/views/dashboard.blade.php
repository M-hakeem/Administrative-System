<x-layout>
    <div id="page-inner">
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-lg-12 ">
                <div class="alert alert-info">
                    <strong>Welcome: {{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}
                    </strong>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row text-center pad-top">
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="{{ route('distributor.show') }}">
                        <h2>{{ $item['distributor_count'] }}</h2>
                        <h4>No of Distributors</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="{{ route('staff.show') }}">
                        <h2>{{ $item['staff_count'] }}</h2>
                        <h4>No of Staffs</h4>
                    </a>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row text-center pad-top">
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="{{ route('admin.show') }}">
                        <i class="fa fa-key fa-5x"></i>
                        <h4>Admins</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="{{ route('admin.register') }}">
                        <i class="fa fa-user fa-5x"></i>
                        <h4>Register Admin</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="row text-center pad-top">
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="blank.html">
                        <i class="fa fa-circle-o-notch fa-5x"></i>
                        <h4>Check Data</h4>
                    </a>
                </div>


            </div>
            <div class="col-lg-6 col-md-2 col-sm-2 col-xs-6">
                <div class="div-square">
                    <a href="blank.html">
                        <i class="fa fa-gear fa-5x"></i>
                        <h4>Settings</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
