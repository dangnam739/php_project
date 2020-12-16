<!doctype html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/user/img/favicon.ico') }}">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('/profile/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('/profile/css/ace.min.css') }}" class="ace-main-stylesheet"
        id="main-ace-style" />

    <link rel="stylesheet" href="{{ asset('/profile/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-rtl.min.css') }}" />


    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('/profile/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/jquery.gritter.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap-editable.min.css') }}" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/style.css') }}">






    <script src="{{ asset('/user/js/jquery.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- User-profile CSS here -->
    <!-- <link rel="stylesheet" href="{{ asset('/user/css/user-profile.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('/user/css/custom.css') }}">

</head>

<body>
    <!-- ? Preloader Start -->

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/user/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ URL::to('/') }}"><img src="{{ asset('/user/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                                                <li><a href="{{ URL::to('/posts') }}">Posts</a></li>
                                                <li><a href="{{ URL::to('create_post') }}">Create</a></li>
                                                <li><a href="#">Categories</a>
                                                    <ul class="submenu">
                                                        @foreach ($tags as $tag)
                                                            <li><a
                                                                    href="{{ URL::to('/posts/tag/' . $tag->tag_id) }}">{{ $tag->tag_title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                @if (!session('status') && auth()->user())
                                                    <li><a href="#">My account</a>
                                                        <ul class="submenu">
                                                            <li><a
                                                                    href="{{ URL::to('users/' . Auth::user()->user_id) }}">View
                                                                    Profile</a></li>
                                                            <li><a
                                                                    href="{{ URL::to('users/' . Auth::user()->user_id . '/edit') }}">Edit
                                                                    Profile</a></li>
                                                            @if (auth()->user()->admin)
                                                                <li><a href="{{ URL::to('admin/home-page') }}">Control
                                                                        Page</a></li>
                                                            @endif
                                                            <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
                                                        </ul>
                                                    </li>
                                                @else
                                                    <li class="button-header margin-left "><a
                                                            href="{{ URL::to('/register') }}" class="btn">Sign
                                                            Up</a></li>
                                                    <li class="button-header"><a href="{{ URL::to('/login') }}"
                                                            class="btn btn3">Log in</a></li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="{{ asset('/user/img/logo/logo2_footer.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>The automated process starts as soon as your clothes go into the machine.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());

                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="{{ asset('/user/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    {{--<script src="{{ asset('/user/js/vendor/jquery-1.12.4.min.js') }}"></script>
    --}}
    <script src="{{ asset('/user/js/popper.min.js') }}"></script>
    {{--<script src="{{ asset('/user/js/bootstrap.min.js') }}"></script>
    --}}
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/user/js/jquery.slicknav.min.js') }}"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/user/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/user/js/wow.min.js') }}"></script>
    <script src="{{ asset('/user/js/animated.headline.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('/user/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('/user/js/jquery.barfiller.js') }}"></script>
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('/user/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/user/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/user/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('/user/js/contact.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/user/js/mail-script.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('/user/js/plugins.js') }}"></script>
    <script src="{{ asset('/user/js/main.js') }}"></script>

</body>

</html>
