<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name}} </div>
            <div class="email">{{ auth()->user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">NAVIGATION</li>



            <li class="{{ Request::is('employee*')? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Employee</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::is('employee/all')? 'active' : '' }}">
                        <a href="{{ route('employee.all') }}" >All Employees</a>
                    </li>
                    <li class="{{ Request::is('employee/create')? 'active' : '' }}">
                        <a href="{{ route('employee.create') }}" >Add New</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/user*')? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Users</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::is('admin/user/all')? 'active' : '' }}">
                        <a href="{{ route('admin.users') }}">All Users</a>
                    </li>
                    <li class="{{ Request::is('admin/user/create')? 'active' : '' }}">
                        <a href="{{ route('admin.user.create') }}">Add User</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/customers*')? 'active' : '' }}">
                <a href="{{ route('admin.customers') }}" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>All Customers</span>
                </a>
                
            </li>


        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            <a href="#" target="_blank">&copy; Innovative Creation Limited</a> | <a target="_blank" href="https://www.linkedin.com/in/webdevmohin/">Developed By MOHIN</a>
        </div>
        <div class="version">
           <b>Version: </b> 1.0.0 ( 2019 )
        </div>
    </div>
    <!-- #Footer -->
</aside>