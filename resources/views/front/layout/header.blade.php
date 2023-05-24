<header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{asset('images/homesewalogo.png')}}" style="width:70px; height:80px;"></a>
                    </li>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{route('service-category')}}">Service Category</a>
                    </li>
                    <li>
                        <a href="#">About US</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Our Location</a>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype==='ADM')
                                <li class="login-form"> <a href="#" title="Register">My Account ({{Auth::user()->name}})</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Service Category</a></li>
                                        <li><a href="#">All Service</a></li>
                                        <li><a href="#">Manage Slider</a></li>
                                        <li><a href="#">Service Providers</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->utype==='SVP')
                                <li class="login-form"> <a href="#" title="Register">My Account ({{Auth::user()->name}})</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form"> <a href="#" title="Register">My Account ({{Auth::user()->name}})</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('user.profile')}}">Profile Update</a></li>
                                        <li><a href="{{route('user.changepassword')}}">Change Password</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                            <!-- Create a logout form -->
                            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{route('register')}}" title="Register">Register</a></li>
                            <li class="login-form"> <a href="{{route('login')}}" title="Login">Login</a></li>
                        @endif
                    @endif
                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>
