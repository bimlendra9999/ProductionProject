<aside id="left-panel" class="left-panel" style="background-color: #152238">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #152238">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('admin.dashboard')}}"><img src="{{asset('images/homesewalogo.png')}}" alt="Logo" style="width:70px; height:80px;"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="{{route('categories.index')}}"> <i class="menu-icon fa fa-table"></i>Manage Category </a>
                    </li>
                    <li class="active">
                        <a href="{{route('services.index')}}"> <i class="menu-icon fa fa-th"></i>Manage Service </a>
                    </li>
                    <li class="active">
                        <a href="{{route('users.index')}}"> <i class="menu-icon fa fa-id-badge"></i>Users</a>
                    </li>
                    <li class="active">
                        <a href="{{route('serviceproviders.index')}}"> <i class="menu-icon fa fa-id-badge"></i>Service Providers</a>
                    </li>
                    <li class="active">
                        <a href="{{route('payment.records')}}"> <i class="menu-icon fa fa-bars"></i>Payments</a>
                    </li>
                    <li class="active">
                        <a href="{{route('admin.changepassword')}}"> <i class="menu-icon  fa fa-paper-plane"></i>Change Password</a>
                    </li>
                    <li class="active">
                        <a href="{{route('subscription')}}"> <i class="menu-icon fa fa-id-badge"></i>Newsletter</a>
                    </li>
                    <li class="active">
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="menu-icon menu-icon fa fa-sign-in"></i>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
