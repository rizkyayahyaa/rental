<?php error_reporting(0);?>
<!-- /Header -->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                @if(!Route::is(['choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial']))
                <a id="mobile_btn" href="javascript:void(0);">
                    @if(!Route::is(['index-3']))
                    <span class="bar-icon">
                    @endif
                    @if(Route::is(['index-3']))
                    <span class="bar-icon bar-icon-three">
                    @endif
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                @endif
                <a href="{{url('/')}}" class="navbar-brand logo">
                    <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                </a>
                <a href="{{url('/')}}" class="navbar-brand logo-small">
                    <img src="{{ URL::asset('/assets/img/logo-small.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{url('/')}}" class="menu-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu {{ Request::is('/','index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9') ? 'active' : '' }}">
                        <a href="javascript:void(0);">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('/') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('/')}}">Electrical Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-2')}}"><img src="{{ URL::asset('/assets/img/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-2')}}">Cleaning Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-3')}}"><img src="{{ URL::asset('/assets/img/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-3')}}">Saloon Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-4')}}"><img src="{{ URL::asset('/assets/img/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-4')}}">Catering Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-5')}}"><img src="{{ URL::asset('/assets/img/home-05.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-5')}}">Car Wash Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-6')}}"><img src="{{ URL::asset('/assets/img/home-06.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-6')}}">Cleaning Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-7') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-7')}}"><img src="{{ URL::asset('/assets/img/home-07.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-7')}}">House Problem Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-8') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-8')}}"><img src="{{ URL::asset('/assets/img/home-08.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-8')}}">Pet Grooming Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-9') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-9')}}"><img src="{{ URL::asset('/assets/img/home-09.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-9')}}">Mechanic Home</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if($page=="service-grid" || $page=="service-details" || $page=="service-list" || $page=="search-list" || $page=="search" || $page=="providers" || $page=="provider-details") { echo 'active'; } ?>">
                        <a href="javascript:void(0);">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="service-grid" || $page=="service-details") { echo 'active'; } ?>"><a href="{{url('service-grid')}}">Service Grid</a></li>
                            <li class="<?php if($page=="service-list" || $page=="search-list") { echo 'active'; } ?>"><a href="{{url('service-list')}}">Service List</a></li>
                            <li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="{{url('search')}}">Search</a></li>
                            <li class="has-submenu <?php if($page=="providers" || $page=="provider-details") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Providers</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="providers") { echo 'active'; } ?>"><a href="{{url('providers')}}">Providers List</a></li>
                                    <li class="<?php if($page=="provider-details") { echo 'active'; } ?>"><a href="{{url('provider-details')}}">Providers Details</a></li>
                                </ul>
                            </li>
                            <li class="<?php if($page=="service-information") { echo 'active'; } ?>"><a href="{{url('service-information')}}">Create Service</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if($page=="customer-dashboard" || $page=="customer-booking-calendar" || $page=="customer-booking" || $page=="customer-favourite" || $page=="customer-wallet" || $page=="customer-reviews" || $page=="customer-chat" || $page=="customer-profile" || $page=="security-settings" || $page=="customer-notifications" || $page=="connected-apps") { echo 'active'; } ?>">
                        <a href="">Customers <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="customer-dashboard") { echo 'active'; } ?>"><a href="{{url('customer-dashboard')}}">Dashboard</a></li>
                            <li class="<?php if($page=="customer-booking" || $page=="customer-booking-calendar") { echo 'active'; } ?>"><a href="{{url('customer-booking')}}">Booking</a></li>
                            <li class="<?php if($page=="customer-favourite") { echo 'active'; } ?>"><a href="{{url('customer-favourite')}}">Favorites</a></li>
                            <li class="<?php if($page=="customer-wallet") { echo 'active'; } ?>"><a href="{{url('customer-wallet')}}">Wallet</a></li>
                            <li class="<?php if($page=="customer-reviews") { echo 'active'; } ?>"><a href="{{url('customer-reviews')}}">Reviews</a></li>
                            <li class="<?php if($page=="customer-chat") { echo 'active'; } ?>"><a href="{{url('customer-chat')}}">Chat</a></li>
                            <li class="<?php if($page=="customer-profile" || $page=="security-settings" || $page=="customer-notifications" || $page=="connected-apps") { echo 'active'; } ?>"><a href="{{url('customer-profile')}}">Settings</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if($page=="provider-dashboard" || $page=="provider-services" || $page=="provider-booking" || $page=="provider-payout" || $page=="provider-availability" || $page=="provider-holiday" || $page=="provider-coupons" || $page=="provider-offers" || $page=="provider-reviews" || $page=="provider-earnings" || $page=="provider-chat") { echo 'active'; } ?>">
                        <a href="">Providers <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="provider-dashboard") { echo 'active'; } ?>"><a href="{{url('provider-dashboard')}}">Dashboard</a></li>
                            <li class="<?php if($page=="provider-services") { echo 'active'; } ?>"><a href="{{url('provider-services')}}">My Services</a></li>
                            <li class="<?php if($page=="provider-booking") { echo 'active'; } ?>"><a href="{{url('provider-booking')}}">Booking</a></li>
                            <li class="<?php if($page=="provider-payout") { echo 'active'; } ?>"><a href="{{url('provider-payout')}}">Payout</a></li>
                            <li class="has-submenu <?php if($page=="provider-appointment-settings" || $page=="provider-profile-settings" || $page=="provider-social-profile" || $page=="provider-security-settings" || $page=="provider-plan" || $page=="provider-notifcations" || $page=="provider-connected-apps") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Settings</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="provider-appointment-settings") { echo 'active'; } ?>"><a href="{{url('provider-appointment-settings')}}">Appointment Settings</a></li>
                                    <li class="<?php if($page=="provider-profile-settings") { echo 'active'; } ?>"><a href="{{url('provider-profile-settings')}}">Account Settings</a></li>
                                    <li class="<?php if($page=="provider-social-profile") { echo 'active'; } ?>"><a href="{{url('provider-social-profile')}}">Social Profiles</a></li>
                                    <li class="<?php if($page=="provider-security-settings") { echo 'active'; } ?>"><a href="{{url('provider-security-settings')}}">Security</a></li>
                                    <li class="<?php if($page=="provider-plan") { echo 'active'; } ?>"><a href="{{url('provider-plan')}}">Plan & Billings</a></li>
                                    <li class="<?php if($page=="provider-notifcations") { echo 'active'; } ?>"><a href="{{url('provider-notifcations')}}">Notifications</a></li>
                                    <li class="<?php if($page=="provider-connected-apps") { echo 'active'; } ?>"><a href="{{url('provider-connected-apps')}}">Connected Apps</a></li>
                                    <li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-account">Delete Account</a></li>
                                </ul>
                            </li>
                            <li class="<?php if($page=="provider-availability") { echo 'active'; } ?>"><a href="{{url('provider-availability')}}">Availability</a></li>
                            <li class="<?php if($page=="provider-holiday") { echo 'active'; } ?>"><a href="{{url('provider-holiday')}}">Holidays & Leave</a></li>
                            <li class="<?php if($page=="provider-coupons") { echo 'active'; } ?>"><a href="{{url('provider-coupons')}}">Coupons</a></li>
                            <li class="<?php if($page=="provider-offers") { echo 'active'; } ?>"><a href="{{url('provider-offers')}}">Offers</a></li>
                            <li class="<?php if($page=="provider-reviews") { echo 'active'; } ?>"><a href="{{url('provider-reviews')}}">Reviews</a></li>
                            <li class="<?php if($page=="provider-earnings") { echo 'active'; } ?>"><a href="{{url('provider-earnings')}}">Earnings</a></li>
                            <li class="<?php if($page=="provider-chat") { echo 'active'; } ?>"><a href="{{url('provider-chat')}}">Chat</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if($page=="about-us" || $page=="contact-us" || $page=="how-it-works" || $page=="choose-signup" || $page=="user-signup" || $page=="provider-signup" || $page=="login" || $page=="reset-password" || $page=="password-recovery" || $page=="phone-otp" 
                    || $page=="email-otp" || $page=="free-trial" || $page=="booking" || $page=="booking-payment" || $page=="booking-done"|| $page=="categories" || $page=="pricing" || $page=="faq" || 
                    $page=="maintenance" || $page=="coming-soon" || $page=="privacy-policy" || $page=="terms-condition" || $page=="session-expired") { echo 'active'; } ?>">
                        <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="about-us") { echo 'active'; } ?>"><a href="{{url('about-us')}}">About</a></li>
                            <li class="<?php if($page=="contact-us") { echo 'active'; } ?>"><a href="{{url('contact-us')}}">Contact Us</a></li>
                            <li class="<?php if($page=="how-it-works") { echo 'active'; } ?>"><a href="{{url('how-it-works')}}">How It Works</a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="{{url('error-404')}}">404 Error</a></li>
                                    <li><a href="{{url('error-500')}}">500 Error</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu <?php if($page=="choose-signup" || $page=="user-signup" || $page=="provider-signup" || $page=="login" || $page=="reset-password" || $page=="password-recovery" || $page=="phone-otp" || $page=="email-otp" || $page=="free-trial") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="choose-signup") { echo 'active'; } ?>"><a href="{{url('choose-signup')}}">Signup Choose </a></li>
                                    <li class="<?php if($page=="user-signup") { echo 'active'; } ?>"><a href="{{url('user-signup')}}">Customer Signup</a></li>
                                    <li class="<?php if($page=="provider-signup") { echo 'active'; } ?>"><a href="{{url('provider-signup')}}">Provider Signup</a></li>
                                    <li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="{{url('login')}}">Login</a></li>
                                    <li class="<?php if($page=="reset-password") { echo 'active'; } ?>"><a href="{{url('reset-password')}}">Reset Password</a></li>
                                    <li class="<?php if($page=="password-recovery") { echo 'active'; } ?>"><a href="{{url('password-recovery')}}">Password Update</a></li>
                                    <li class="<?php if($page=="phone-otp") { echo 'active'; } ?>"><a href="{{url('phone-otp')}}">Phone OTP</a></li>
                                    <li class="<?php if($page=="email-otp") { echo 'active'; } ?>"><a href="{{url('email-otp')}}">Email OTP</a></li>
                                    <li class="<?php if($page=="free-trial") { echo 'active'; } ?>"><a href="{{url('free-trial')}}">Free Trial</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu <?php if($page=="booking" || $page=="booking-payment" || $page=="booking-done") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="{{url('booking')}}">Booking</a></li>
                                    <li class="<?php if($page=="booking-payment") { echo 'active'; } ?>"><a href="{{url('booking-payment')}}">Booking Checkout</a></li>
                                    <li class="<?php if($page=="booking-done") { echo 'active'; } ?>"><a href="{{url('booking-done')}}">Booking Success</a></li>
                                </ul>
                            </li>
                            <li class="<?php if($page=="categories") { echo 'active'; } ?>"><a href="{{url('categories')}}">Categories</a></li>
                            <li class="<?php if($page=="pricing") { echo 'active'; } ?>"><a href="{{url('pricing')}}">Pricing Plan</a></li>
                            <li class="<?php if($page=="faq") { echo 'active'; } ?>"><a href="{{url('faq')}}">FAQ</a></li>
                            <li class="<?php if($page=="maintenance") { echo 'active'; } ?>"><a href="{{url('maintenance')}}">Maintenance</a></li>
                            <li class="<?php if($page=="coming-soon") { echo 'active'; } ?>"><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                            <li class="<?php if($page=="privacy-policy") { echo 'active'; } ?>"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li class="<?php if($page=="terms-condition") { echo 'active'; } ?>"><a href="{{url('terms-condition')}}">Terms & Conditions</a></li>
                            <li class="<?php if($page=="session-expired") { echo 'active'; } ?>"><a href="{{url('session-expired')}}">Session Expired</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu <?php if($page=="blog-grid" || $page=="blog-list" || $page=="blog-details") { echo 'active'; } ?>">
                        <a href="{{url('blog-grid')}}">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="{{url('blog-grid')}}">Blog Grid</a></li>
                            <li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="{{url('blog-list')}}">Blog List</a></li>
                            <li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="{{url('blog-details')}}">Blog Details</a></li>
                        </ul>
                    </li>
                    @if(!Route::is(['customer-dashboard','customer-booking','customer-favourite','customer-wallet','customer-reviews','customer-chat','customer-profile','security-settings','customer-notifications','connected-apps','invoice',
                    'notification','orders','success','customer-booking-calendar']))
                    <li class="has-submenu"><a href="admin/signin">Admin</a></li>
                    @endif
                    @if(!Route::is(['invoice','orders','success','customer-booking-calendar']))
                    <li class="login-link">
                        <a href="{{url('choose-signup')}}">Register</a>
                    </li>
                    <li class="login-link">
                        <a href="{{url('login')}}">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{url('choose-signup')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><i class="fa-regular fa-circle-user me-2"></i>Login</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->