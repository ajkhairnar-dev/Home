@include('layouts.header')
<!-- pre-loader start -->
<div class="loader-wrapper img-gif">
    <img src="{{asset('images/loader.gif')}}" alt="">
</div>
<!-- pre-loader end -->
<!-- offcanvas panel -->
<aside class="offcanvas" id="my_offcanvas1">
    <header class="p-2 bg-light border-bottom">
        <button class="btn btn-outline-danger btn-close"></button>
        <a href="{{route('home')}}">
            <img src="{{asset('images/logo/final_iline_logo.svg')}}" alt="" class="img-fluid blur-up lazyload" style="width:150px;">
        </a>
    </header>
    <nav class="list-group list-group-flush sidebar">
        <div class="aside_menu_links">
            <ul style="display: inline;">

                @auth
                <div class="" style="display:block;padding-top:15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="pro_sticky_info" data-sticky_column>
                                    <div class="dashboard-sidebar">
                                        <div class="profile-top">
                                            <div class="profile-image">
                                                <img src="{{asset('images/avtar/1.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="pro_sticky_info" data-sticky_column>
                                    <div class="dashboard-sidebar">
                                        <div class="profile-top">
                                            <div class="profile-detail">
                                                <h6 style="font-size:12px;">Ravishankar Pal</h6>
                                                <h6 style="font-size:12px;">+917447344789</h6>
                                                <h6 style="font-size:12px;">domainsdefault@gmail.com</h6>
                                                <h6 style="font-size:12px;"><span class="ti-server"></span>
                                                    <span class="icon-name ">50 points</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
                
                @guest
                    <li><a data-bs-toggle="modal" data-bs-target="#registration_popUp" class="list-group-item">Login</a></li>
                @endguest
                
                <li><a href="index.php" class="list-group-item "></a></li>
                <li><a href="{{route('home')}}" class="list-group-item {{ (request()->is('home')) ? 'active' : '' }}"><span class="ti-home"></span> Home</a></li>
                <li><a href="{{route('about')}}" class="list-group-item "><span class="ti-world"></span> About us</a></li>
                <li><a href="{{route('bookride')}}" class="list-group-item "><span class="ti-car"></span> Book a Ride</a></li>
                <li><a href="{{route('account')}}" class="list-group-item "><span class="ti-user"></span> My Profile</a></li>
                <li><a href="{{route('mybookings')}}" class="list-group-item "><span class="ti-map-alt"></span> My Trips</a></li>
                <li><a href="{{route('earnings')}}" class="list-group-item "><span class="ti-money"></span> Earnings</a></li>

                <!--<li class="nav-item has-submenu list-group-item ">
                            		<a class="nav-link" href="#"> Submenu links</a>
                            		<ul class="submenu collapse" style="">
                            			<li><a class="nav-link" href="#">Submenu item 1 </a></li>
                            		    <li><a class="nav-link" href="#">Submenu item 2 </a></li>
                            		    <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
                            		</ul>
                            	</li>--->
                <li><a href="{{route('cabishpoints')}}" class="list-group-item "><span class="ti-server"></span> Cabish Points</a></li>
                <li><a href="{{route('careers')}}" class="list-group-item "><span class="ti-linkedin"></span> Careers</a></li>
                <li><a href="{{route('contact')}}" class="list-group-item "><span class="ti-email"></span> Contact Us</a></li>


            </ul>
        </div>
    </nav>
</aside>

<header class=" mix-2">
    <div class="container" style="max-width:100%;">
        <div class="row">
            <div class="col-md-12">
                <div class="menu py-2 h-100 ml-auto d-flex justify-content-between">
                    <div class="brand-logo d-flex align-items-center gap-2">
                        <a href="#" class="desktopmenu header_menu__button text-dark text-capitalize rounded5" data-trigger="#my_offcanvas1">
                            <span class="ti-menu"></span>
                            <span>Menu</span>
                        </a>
                        <a href="{{route('home')}}">
                            <img src="{{asset('images/logo/final_iline_logo.svg')}}" alt="" class="img-fluid blur-up lazyload" style="width:150px;">
                        </a>
                        <a href="#" class="mobilemenu header_menu__button text-dark text-capitalize rounded5" data-trigger="#my_offcanvas1">
                            <span class="ti-menu"></span>
                        </a>
                    </div>




                    <div class="ml-auto">

                        <ul class="header-right">
                            <!-- Authentication Links -->
                        
                            @if(session()->has('isLogin'))
                                
                                <li>
                                    <a href="my-profile.php" class="user user-light text-dark text-capitalize rounded5">
                                        <span class="ti-user"></span>
                                        <span class="icon-name">welcome {{ session()->get('isLogin')['name'] }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user user-light text-dark text-capitalize rounded5">
                                        <span class="ti-server"></span>
                                        <span class="icon-name ">{{ session()->get('isLogin')['cabishpoint'] }} points</span>
                                    </a>
                                </li>
                                
                                <li>
                                <a  href="{{ route('logout') }}">{{ __('Logout') }} </a>
                                </li>
                            @else
                            <li>
                                    <a data-bs-toggle="modal" data-bs-target="#registration_popUp" class="user user-light text-dark text-capitalize rounded5">
                                        <span class="ti-user"></span>
                                        <span class="icon-name">{{ __('Login') }}</span>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="tel:+918989282811" class="user user-light text-dark text-capitalize rounded5">
                                    <span class="ti-headphone-alt"></span>
                                    <span class="icon-name ">8989-2828-11</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
