<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">

        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name}}</div>
            <div class="email">{{ auth()->user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="{{ route('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>



            <li class="active">
                <a href="{{ route('editor.dashboard') }}" class="menu-toggle">
                    <i class="material-icons">swap_calls</i>
                    <span>Customers</span>
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