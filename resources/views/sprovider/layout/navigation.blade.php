<aside id="left-panel" class="left-panel" style="background-color: #152238">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #152238">

            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('sprovider.dashboard')}}"><img src="{{asset('images/homesewalogo.png')}}" alt="Logo" style="width:70px; height:80px;"></a>
                <!-- <a class="navbar-brand hidden" href="./"><img src="{{asset('admin/images/logo2.png')}}" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('sprovider.dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="{{route('sproviderservices.index')}}"> <i class="menu-icon fa fa-table"></i>Service Management</a>
                    </li>
                    <li class="active">
                        <a href="{{route('profiles.index')}}"> <i class="menu-icon fa fa-id-badge"></i>Profile Management</a>
                    </li>
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-table"></i>Service Booked</a>
                    </li>
                    <li class="active">
                        <a href="{{route('sprovider.changepassword')}}"> <i class="menu-icon fa fa-paper-plane"></i>Change Password</a>
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
