<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="@if(Route::currentRouteName() == 'dashboard') active-link @endif" >
                <a href="{{ route('dashboard') }}"><i class="fa fa-desktop "></i>Dashboard <span
                        class="badge"></span></a>
            </li>


            <li class="@if(Route::currentRouteName() == 'distributor.register') active-link @endif">
                <a href="{{ route('distributor.register') }}"><i class="fa fa-plus "></i>Add Distributor<span
                        class="badge"></span></a>
            </li>

            <li class="@if(Route::currentRouteName() == 'distributor.show') active-link @endif">
                <a href="{{ route('distributor.show') }}"><i class="fa fa-table "></i>Distributor Data<span
                        class="badge"></span></a>
            </li>
            <li class="@if(Route::currentRouteName() == 'staff.register') active-link @endif">
                <a href="{{ route('staff.register') }}"><i class="fa fa-plus"></i>Add Staff</a>
            </li>
            <li class="@if(Route::currentRouteName() == 'staff.show') active-link @endif">
                <a href="{{ route('staff.show') }}"><i class="fa fa-table "></i>Staff Data</a>
            </li>
            <li class="@if(Route::currentRouteName() == 'staff.casual') active-link @endif">
                <a href="{{ route('staff.casual') }}"><i class="fa fa-users "></i>Casual Staffs</a>
            </li>
            <li class="@if(Route::currentRouteName() == 'distributor.suspended') active-link @endif">
                <a href="{{ route('distributor.suspended') }}"><i class="fa fa-ban "></i>Suspended Distributors</a>
            </li>
            <li class="@if(Route::currentRouteName() == 'admin.profile') active-link @endif">
                <a href="{{ route('admin.profile') }}"><i class="fa fa-user "></i>Profile</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"><i class="fa fa-sign-out "></i>Logout</a>
            </li>
        </ul>
    </div>

</nav>
