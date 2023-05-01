<header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <!-- <a href="{{asset('index.php.html')}}"><img src="{{asset('images/logo.png')}}"></a> -->
                    </li>
                    <li> <a href="javascript:void(0);">Air Conditioners</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{asset('service-details/ac-wet-servicing.html')}}">Wet Servicing</a></li>
                            <li><a href="{{asset('service-details/ac-dry-servicing.html')}}">Dry Servicing</a></li>
                            <li><a href="{{asset('service-details/ac-installation.html')}}">Installation</a></li>
                            <li><a href="{{asset('service-details/ac-uninstallation.html')}}">Uninstallation</a></li>
                            <li><a href="{{asset('service-details/ac-gas-top-up.html')}}">Gas Top Up</a></li>
                            <li><a href="{{asset('service-details/ac-gas-refill.html')}}">Gas Refill</a></li>
                            <li><a href="{{asset('service-details/ac-repair.html')}}">Repair</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Appliances</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{asset('servicesbycategory/11.html')}}">Computer Repair</a></li>
                            <li><a href="{{asset('servicesbycategory/12.html')}}">TV</a></li>
                            <li><a href="{{asset('servicesbycategory/1.html')}}">AC</a></li>
                            <li><a href="{{asset('servicesbycategory/14.html')}}">Geyser</a></li>
                            <li><a href="{{asset('servicesbycategory/21.html')}}">Washing Machine</a></li>
                            <li><a href="{{asset('servicesbycategory/22.html')}}">Microwave Oven</a></li>
                            <li><a href="{{asset('servicesbycategory/9.html')}}">Chimney and Hob</a></li>
                            <li><a href="{{asset('servicesbycategory/10.html')}}">Water Purifier</a></li>
                            <li><a href="{{asset('servicesbycategory/13.html')}}">Refrigerator</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Needs</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{asset('servicesbycategory/19.html')}}">Laundry</a></li>
                            <li><a href="{{asset('servicesbycategory/4.html')}}">Electrical</a></li>
                            <li><a href="{{asset('servicesbycategory/8.html')}}">Pest Control</a></li>
                            <li><a href="{{asset('servicesbycategory/7.html')}}">Carpentry</a></li>
                            <li><a href="{{asset('servicesbycategory/3.html')}}">Plumbing </a></li>
                            <li><a href="{{asset('servicesbycategory/20.html')}}">Painting</a></li>
                            <li><a href="{{asset('servicesbycategory/17.html')}}">Movers &amp; Packers</a></li>
                            <li><a href="{{asset('servicesbycategory/5.html')}}">Shower Filters </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{asset('service-details/bedroom-deep-cleaning.html')}}">Bedroom Deep Cleaning</a></li>
                            <li><a href="{{asset('service-details/overhead-water-storage.html')}}">Overhead Water Storage </a></li>
                            <li><a href="{{asset('/service-details/tank-cleaning')}}">Tank Cleaning</a></li>
                            <li><a href="{{asset('service-details/underground-sump-cleaning.html')}}">Underground Sump Cleaning</a>
                            </li>
                            <li><a href="{{asset('service-details/dining-chair-shampooing.html')}}">Dining Chair Shampooing </a></li>
                            <li><a href="{{asset('service-details/office-chair-shampooing.html')}}">Office Chair Shampooing</a></li>
                            <li><a href="{{asset('service-details/home-deep-cleaning.html')}}">Home Deep Cleaning </a></li>
                            <li><a href="{{asset('service-details/carpet-shampooing.html')}}">Carpet Shampooing </a></li>
                            <li><a href="{{asset('service-details/fabric-sofa-shampooing.html')}}">Fabric Sofa Shampooing</a></li>
                            <li><a href="{{asset('service-details/bathroom-deep-cleaning.html')}}">Bathroom Deep Cleaning</a></li>
                            <li><a href="{{asset('service-details/floor-scrubbing-polishing.html')}}">Floor Scrubbing &amp; Polishing
                                </a></li>
                            <li><a href="{{asset('service-details/mattress-shampooing.html')}}">Mattress Shampooing </a></li>
                            <li><a href="{{asset('service-details/kitchen-deep-cleaning.html')}}">Kitchen Deep Cleaning </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Special Services</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{asset('servicesbycategory/16.html')}}">Document Services</a></li>
                            <li><a href="{{asset('servicesbycategory/15.html')}}">Cars &amp; Bikes</a></li>
                            <li><a href="{{asset('servicesbycategory/17.html')}}">Movers &amp; Packers </a></li>
                            <li><a href="{{asset('servicesbycategory/18.html')}}">Home Automation</a></li>
                        </ul>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype==='ADM')
                                <li class="login-form"> <a href="#" title="Register">My Account (Admin)</a>
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
                                <li class="login-form"> <a href="#" title="Register">My Account (S Provider)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form"> <a href="#" title="Register">My Account (Customer)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="#">Dashboard</a></li>
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
