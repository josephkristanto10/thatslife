<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <!-- <link href="{{asset('res/myfont.css?family=PT+Sans+Caption:400,700|PT+Sans:400,700|PT+Serif:400,400i&display=swap')}}" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="{{asset('res/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('res/style.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="{{asset('res/css/dark.css')}}" type="text/css" /> -->

    <!-- Barber Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('res/demos/barber/barber.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('res/demos/barber/css/fonts.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('res/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('res/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('res/css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('res/one-page/css/et-line.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('res/css/custom.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('res/css/colors.php?color=BF9456')}}" type="text/css" />
    <link rel="shortcut icon" href="{{asset('res/newimage/lovetransparent.png')}}" />
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.theme.default.min.css')}}">

    <script src="{{asset('owl/dist/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Document Title
	============================================= -->
    <title>Nella Life Story</title>

    <style>
        .line-1 {
            position: relative;
            top: 50%;
            width: 24em;
            margin: 0 auto;
            border-right: 2px solid rgba(255, 255, 255, .75);
            font-size: 180%;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);
        }

        /* Animation */
        .anim-typewriter {
            animation: typewriter 4s steps(44) 1s 1 normal both,
                blinkTextCursor 500ms steps(44) infinite normal;
        }

        @keyframes typewriter {
            from {
                width: 0;
            }

            to {
                width: 24em;
            }
        }

        @keyframes blinkTextCursor {
            from {
                border-right-color: rgba(255, 255, 255, .75);
            }

            to {
                border-right-color: transparent;
            }
        }

        /* Page Loading Style */

        .css3-spinner {
            height: 100vh;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background-color: #bF9456;
        }

        @keyframes pulse {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.8, .8, .8);
                transform: scale3d(.8, .8, .8);
            }

            50% {
                opacity: 1;
            }
        }

        .infinite.animated.pulse {
            -webkit-animation-duration: 1.7s;
            animation-duration: 1.7s;
        }

        #navbartop a {
            padding: 10px;
            color: #ffffff !important;
            font-size: 13px !important;
            font-weight: 700;
            border-radius: 5px;
        }

        #navbartop li.active a {
            padding: 10px;
            /* background-color: #d69d47; */
            background-color: rgb(214, 157, 71, 0.7);
            color: #ffffff !important;
            font-size: 13px !important;
            font-weight: 700;
            border-radius: 5px;
        }

        #navbartop li:hover {
            padding: 5px;
            background-color: rgb(214, 157, 71, 0.7);
            color: #ffffff !important;
            font-size: 13px !important;
            font-weight: 700;
            border-radius: 5px;
        }

        /* for demo purposes */
        .card {
            height: 325px;
            margin: 10px 10px;
        }

        /* Flip Cards CSS */
        .card-container {
            display: grid;
            perspective: 700px;
        }

        .card-flip {
            display: grid;
            grid-template: 1fr / 1fr;
            grid-template-areas: "frontAndBack";
            transform-style: preserve-3d;
            transition: all 0.7s ease;
        }

        .card-flip div {
            backface-visibility: hidden;
            transform-style: preserve-3d;
        }

        .front {
            grid-area: frontAndBack;
        }

        .back {
            grid-area: frontAndBack;
            transform: rotateY(-180deg);
        }

        .card-container:hover .card-flip {
            transform: rotateY(180deg);
        }

        .pagination {
            justify-content: center;
        }
    </style>

</head>

<body class="stretched page-transition"
    data-loader-html="<img class='infinite animated pulse' src='res/newimage/mylogo.png' width='300'>">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="transparent-header dark header-size-md" data-sticky-class="not-dark"
            data-sticky-offset="full" data-sticky-offset-negative="60" data-responsive-class="not-dark"
            data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container px-0">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="index.html" class="standard-logo"><img src="{{asset('res/newimage/goldlogo.png')}}"
                                    style="height:50px;"></a>
                            <a href="index.html" class="retina-logo"><img src="{{asset('res/newimage/goldlogo.png')}}"
                                    style="height:50px;"></a>
                        </div>
                        <!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu not-dark text-lg-center">

                            <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1300"
                                data-offset="60">
                                <li class="menu-item active"><a class="menu-link" href="#" data-href="#wrapper">Home</a>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#" data-offset="56"
                                        data-href="#about">About Me</a></li>
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-href="#mypost">My Post</a></li> -->
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-href="#testimonial">My
                                        Quote</a></li> -->
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-href="#testimonial">Testimonial</a></li>-->
                                <li class="menu-item"><a class="menu-link" href="myphoto" data-href="#myphoto">My Photo</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('/liststory') }}" data-offset="62" data-easing="easeInOutExpo"
                                        data-speed="1300" class="button button-color reverse"><i
                                        class="bi bi-brush"></i> Nella's Story</a>
                                </li>
                            </ul>

                        </nav>
                        <!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        <!-- #header end -->

        <!-- Slider
		============================================= -->
        <section id="slider" class="slider-element slider-parallax page-section min-vh-60 min-vh-md-100 include-header">
            <div class="slider-inner"
                style="background: url('res/newimage/tanaman.jpg') center center no-repeat; background-size: cover;">

                <div class="top-right" style="margin-top: 0px !important">
                    <div class="text-center py-5 py-md-0">

                        <nav class="custom-hero-nav" style="float:right;top :0px;margin-top: 35px !important">
                            <ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1300" data-offset="60"
                                id="navbartop">
                                <li class="active"><a href="#" data-href="#slider">Home</a></li>
                                <li><a href="#about" data-offset="56" data-href="#about">About Me</a></li>
                                <li><a href="#mypost" data-href="#mypost">My Post</a></li>
                                <!-- <li><a href="#" data-href="#testimonial">My Quote</a></li> -->
                                <!--  <li><a href="#" data-href="#testimonial">Testimonial</a></li> -->
                                <li><a href="#myphoto" data-href="#myphoto" style="margin-right:20px;">My Photo</a></li>
                            </ul>
                        </nav>
                        <!-- <div style="width:100%;background-color: rgb(237, 220, 220,0.5);height: 200px;">
                            <br> -->
                        <!-- <img src="newimage/thatslife.png" alt="Logo" height="180" width="800"> -->
                        <!-- </div> -->
                        <!-- Slider Navigation
						============================================= -->

                    </div>
                </div>

                <!-- <div class="video-wrap">
                    <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
                </div> -->

                <!-- Slider Appointment Button
				============================================= -->

                <!-- <a href="#" class="button button-large button-color button-appointment d-none d-lg-block" data-scrollto="#contact" data-offset="62" data-easing="easeInOutExpo" data-speed="1300"><i class="icon-calendar2"></i> Make An Appointment</a> -->

                <!-- Slider Social Icons
				============================================= -->
                <div class="slider-social d-none d-lg-block clearfix">

                    <img src="{{asset('res/newimage/mylogo.png')}}" alt="Logo" height="100" width="350">
                    <!-- <a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-facebook">

                    </a>
                    <a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="https://twitter.com/__semicolon" target="_blank" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="https://instagram.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-instagram">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>
                    <a href="https://youtube.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-youtube">
                        <i class="icon-youtube"></i>
                        <i class="icon-youtube"></i>
                    </a> -->
                </div>

            </div>
        </section>

        <!-- Content
		============================================= -->
        <section id="content" style="border-top: 8px solid #bf9456">

            <div class="content-wrap py-0">

                <!-- About Section
				============================================= -->
                <div id="about" class="section m-0 bg-transparent page-section" style="padding: 150px 0">
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <div class="col-md-3 col-6 d-none d-md-block">
                                <img src="{{asset('res/newimage/gedung.jpeg')}}" alt="Image">

                                <img src="{{asset('res/newimage/sunset.jpeg')}}" alt="Image" style="margin-top:20px;">
                            </div>
                            <div class="col-md-6 col-12 center" style="padding: 0 50px;">
                                <img src="{{asset('res/demos/barber/images/icons/cs.svg')}}" alt="Image" height="60"
                                    style="margin-bottom: 20px">
                                <div class="heading-block bottommargin-sm">
                                    <h2>About Me</h2>
                                </div>
                                <p style="  text-align: justify;">Hi guys! You can call me Nella. I love travel, book,
                                    music, movie, art and I love reading and writing too. In 2021, I will start continue
                                    writing my personal blog and With my blog "That's Life" I want to share story of my
                                    life, people life and maybe your life too. So keep reading and hope you will enjoy
                                    it.
                                    <br><br>
                                    <center>
                                        <span style="font-size:20px; text-align: center !important;">Kiss Kiss From
                                        </span><br>
                                        <h3 style="font-size:25px;">Nella</h3>
                                    </center>
                                </p>

                                <!-- <img src="{{asset('res/demos/barber/images/about/sign.png')}}" alt="Image" width="200"> -->
                            </div>
                            <div class="col-md-3 col-6 d-none d-md-block">
                                <img src="{{asset('res/newimage/fotoaboutme3.jpeg')}}" alt="Image">

                                <!-- <img src="{{asset('res/newimage/fotoaboutme1.jpg')}}" alt="Image" style = "margin-top:20px;"> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Page Section
				============================================= -->
                <div id="service" class="section page-section bg-transparent p-0 mt-0 clearfix">

                    <div class="row align-items-stretch clearfix bottommargin">

                        <!-- Service Image
						============================================= -->
                        <!-- <div class="col-lg-6 center col-padding parallax" style="background-image: url('demos/barber/images/sections/1.jpg');" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -300px;">
                            <div class="vertical-middle dark">
                                <div class="heading-block border-0 center">
                                    <h2 class="nott ls0" style="font-size: 54px">How We Do</h2>
                                </div>
                            </div>
                        </div> -->

                        <!-- Service Featured Boxes
						============================================= -->
                        <!-- <div class="col-lg-6 col-padding" style="background-color: #F9F9F9">
                            <div>
                                <div class="row clearfix" style="padding: 20px 0">
                                    <div class="col-lg-10 col-md-8 bottommargin">
                                        <div class="feature-box fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><img src="demos/barber/images/icons/scessior.svg" alt="Image"></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h3>Well Trained Barbers</h3>
                                                <p>Proactively matrix go forward manufactured products before premium innovation. Collaboratively fashion.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-8 bottommargin">
                                        <div class="feature-box fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><img src="demos/barber/images/icons/moustache.svg" alt="Image"></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h3>10 Years Expirience</h3>
                                                <p>Dynamically transition seamless metrics after premium e-business. Phosfluorescently parallel task distinctive.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-8 bottommargin">
                                        <div class="feature-box fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><img src="demos/barber/images/icons/comb.svg" alt="Image"></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h3>Branded Pr0ducts</h3>
                                                <p>Distinctively initiate alternative information with bricks-and-clicks e-commerce. Quickly evolve superior.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-8 bottommargin">
                                        <div class="feature-box fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><img src="demos/barber/images/icons/time.svg" alt="Image"></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h3>Great Location</h3>
                                                <p>Holisticly fashion cooperative ROI without unique intellectual capital. Synergistically engage orthogonal.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-md-8">
                                        <div class="feature-box fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><img src="demos/barber/images/icons/drier1.svg" alt="Image"></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h3>Customer Service</h3>
                                                <p>Monotonectally evisculate high standards in best practices before exceptional web-readiness. Competently.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div id="mypost"></div>
                    <div class="container topmargin-lg clearfix">
                        <div class="heading-block bottommargin-sm center">
                            <h2>My Post</h2>
                        </div>
                        <div class="row">
                            <!-- Barber Category 1
							============================================= -->
                            <div class="col-md-4 center bottommargin-lg">
                                <div class="feature-box media-box">
                                    <div class="fbox-media" style="padding: 0 40px;">
                                        <a href="#"><img class="rounded-circle img-thumbnail"
                                                src="{{asset('res/newimage/thumbnail1.jpg')}}" style="height:250px;"
                                                alt="Why choose Us?">
                                            <div class="sale-flash badge badge-warning py-2 px-3 rounded-0">Best Story
                                            </div>
                                        </a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3><span class="ls0 subtitle font-primary"
                                                style="color:#cc8c2d;font-weight: 800;">Vintage Story.</span></h3>
                                        <p>I will tell you about me exploring some historical place in the world,
                                            traditional culture, habbit, or historical heritage.</p>
                                        <!-- <a href="#" class="more-link text-uppercase ls1 font-weight-bold" style="margin: 20px 0 0 0; font-style: normal;color:rgb(70, 68, 68);border-bottom:1px solid rgb(106, 103, 103) !important">Read More</a> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Barber Category 2
							============================================= -->
                            <div class="col-md-4 center bottommargin-lg">
                                <div class="feature-box media-box">
                                    <div class="fbox-media" style="padding: 0 40px;">
                                        <a href="#"><img class="rounded-circle img-thumbnail"
                                                src="{{asset('res/newimage/inspire.jpg')}}"
                                                style="height:250px !important;"
                                                alt="Effective Planning"><span></span></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3><span class="ls0 subtitle font-primary"
                                                style="color:#cc8c2d;font-weight: 800;">Inspirational Story.</span></h3>
                                        <p>Not only exploring some places, i will tell you too about some of my
                                            inspiring story, maybe about my journey .</p>
                                        <!-- <a href="#" class="more-link text-uppercase ls1 font-weight-bold" style="margin: 20px 0 0 0; font-style: normal;color:rgb(70, 68, 68);border-bottom:1px solid rgb(106, 103, 103) !important">Read More</a> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Barber Category 3
							============================================= -->
                            <div class="col-md-4 center bottommargin-lg">
                                <div class="feature-box media-box">
                                    <div class="fbox-media" style="padding: 0 40px;">
                                        <a href="#"><img class="rounded-circle img-thumbnail"
                                                src="{{asset('res/newimage/travel.jpg')}}"
                                                style="height:250px !important;" alt="Why choose Us?"><span></span></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3><span class="ls0 subtitle font-primary"
                                                style="color:#cc8c2d;font-weight: 800;">Travelling Story.</span></h3>
                                        <p>This is the most amazing part in this story, i will tell you about my
                                            experience exploring some modernistic and trending places.</p>
                                        <!-- <a href="#" class="more-link text-uppercase ls1 font-weight-bold" style="margin: 20px 0 0 0; font-style: normal;color:rgb(70, 68, 68);border-bottom:1px solid rgb(106, 103, 103) !important">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Price Page Section - Parallax
				============================================= -->
                <!-- <div id="price" class="section page-section parallax pb-0 mb-0 dark" style="background-image: url('demos/barber/images/sections/3.jpg'); background-size: cover; height: 600px" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"></div>

                <div class="container bottommargin dark clearfix" style="margin-top: -500px">
                    <div class="heading-block bottommargin-lg center clearfix">
                        <img src="demos/barber/images/icons/wallet-white.svg" alt="Image" height="40" style="margin-bottom: 20px">
                        <h2>Pricing</h2>
                    </div> -->

                <!-- Price Items
					============================================= -->
                <!-- <div class="row dark col-padding clearfix" style="background-color: #121212">
                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Haircut</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$39</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">HairWash</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$42</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="w-100 clear"></div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Shave</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$29</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Hair Colour</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$17</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="w-100 clear"></div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Moustache</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$39</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Beard Trim</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$42</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="w-100 clear"></div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Facial</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$29</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="col-lg-6 price-wrap">
                        <div class="price-header">
                            <div class="price-name">
                                <a href="#" class="color">Head Massage</a>
                            </div>
                            <div class="price-dots">
                                <span class="separator-dots"></span>
                            </div>
                            <div class="price-price">$17</div>
                        </div>
                        <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quos harum officia eaque nobis ut.</p>
                    </div>

                    <div class="col-12 center">
                        <a href="#" class="button button-large button-color d-none d-lg-block "><i class="icon-calendar2"></i> Make An Appointment</a>
                    </div>
                </div>

            </div> -->

                <!-- Shop Page Section
				============================================= -->
                <!-- <div id="shop" class="section m-0 page-section bg-transparent">

                    <div class="container">
                        <div class="heading-block center">
                            <img src="demos/barber/images/icons/comb3.svg" alt="Image" height="40" style="margin-bottom: 20px">
                            <h2>Shop</h2>
                        </div>

                        <div class="row col-mb-50 mb-0"> -->
                <!-- Shop Item 1
							============================================= -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img src="demos/barber/images/shop/1.jpg" alt="High-Heel Girl's Sandals"></a>
                            <a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
                        </div>
                        <div class="product-desc center">
                            <div class="product-price"><ins>$21.49</ins></div>
                            <div class="product-title">
                                <h3><a href="#">Razor</a></h3>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Shop Item 2
							============================================= -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img src="demos/barber/images/shop/2.jpg" alt="High-Heel Girl's Sandals"></a>
                            <a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
                        </div>
                        <div class="product-desc center">
                            <div class="product-price"><ins>$12.49</ins></div>
                            <div class="product-title">
                                <h3><a href="#">Shave Brush</a></h3>
                            </div>
                        </div>
                    </div>
                </div> -->


                <!-- Shop Item 3
							============================================= -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img src="demos/barber/images/shop/3.jpg" alt="High-Heel Girl's Sandals"></a>
                            <a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
                        </div>
                        <div class="product-desc center">
                            <div class="product-price"><ins>$21.99</ins></div>
                            <div class="product-title">
                                <h3><a href="#">Beard oil</a></h3>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Shop Item 4
							============================================= -->
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img src="demos/barber/images/shop/4.jpg" alt="High-Heel Girl's Sandals"></a>
                            <div class="sale-flash badge badge-success p-2">-50%*</div>
                            <a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
                        </div>
                        <div class="product-desc center">
                            <div class="product-price"><del>$24.99</del> <ins>$19.49</ins></div>
                            <div class="product-title">
                                <h3><a href="#">Hair Brush</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="center">
                <a href="#" class="button button-large button-color">+ More Products</a>
            </div>

    </div>
    </div> -->

                <!-- Testimonial Page Section
				============================================= -->

                <div class="" style="  background-image: linear-gradient(#deb135, #f6b14b);width:100% !important;margin:0 !important;padding:10px;height:400px;position:relative;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">

                    <div class="row" style = " margin: 0;  position: absolute;  top: 50%;  left: 50%;  -ms-transform: translate(-50%, -50%);  transform: translate(-50%, -50%);width:100%;">
                        <div class="col-md-3" style="position:relative;   height: 200px;text-align:center;margin-top:75px;">
                            <div style="">
                           <img src = "{{asset('assets/new.png')}}" style = "width:150px;height:150px;"><div  style = "font-size:40px; color:white;"> New Story</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="owl-carousel">
                        
                               
                                @foreach($allstory as $as)
                                <div>
                                    <div class="col-md-12 card-container">        <?php if(count($allstory)>0)
                                    {
                                    ?>
                                        <div class="card-flip" >
                                            <div class="card front">
                                            <?php $myassets =  asset('gambarstory/'.$as->image);?>
                                                <img src="<?=$myassets?>" style="height:250px;"
                                                    class="card-img-top img-fluid">
                                                <div
                                                    style="position:absolute;right:20px;top:20px;font-size:10px;font-weight:bold;background-color:#BF9456;color:white;border-radius:10px;width:125px;height:20px; padding-top:2px; padding-left:10px;">

                                                    {{ date('d F Y', strtotime($as->created_at))}}
                                                </div>
                                                <div class="card-block"
                                                    style="text-align:left;padding:5px;height:50px !important;">
                                                    <div style="height:50px !important;">
                                                        <div style="float:left;line-height:28px;"><span
                                                                style="font-weight:bold;"> {{$as->title}}</span><br>
                                                            <!-- <span style="font-size:14px;">16th Dec
                                                    2020</span> -->

                                                            <span style="color:#3aa322 !important;font-size:13px;"><img
                                                                    class="bd-placeholder-img card-img-top"
                                                                    style="color:#3aa322;width:18px;height:18px;float:left;margin-top:6px;"
                                                                    src="{{asset('res/newimage/pin.png')}}">
                                                                    {{$as->city}}, {{$as->country}}<br></span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Card 2 Front -->

                                            <!-- Card 2 Back -->
                                            <div class="card back" style="padding:10px;">
                                                <div class="card-header"
                                                    style="background-color:#303030;color:white;font-size:14px;">
                                                    {{$as->title}}
                                                </div>
                                                <div class="card-block">
                                                    <br>

                                                    <p class="card-text"
                                                        style="font-size:12px;text-align:justify;padding:5px;">
                                                        {{Str::limit($as->description,300)}} </p>
                                                    <?php
                                                    $urlid = $as->id;
                                                    $destination = URL::to('/detailstory/'.$urlid);
                                                    ?>
                                                    <a href="<?php echo $destination;?>" class="btn btn-primary"
                                                        style="font-size:12px;background-color:#e3a405;border:0px solid black;">Explore
                                                        This Story &nbsp <i class="bi bi-send"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Card 2 Back -->
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Barber Teams
				============================================= -->
                <div class="section bg-transparent mb-0 topmargin-sm clearfix">

                    <div class="container clearfix" id="myphoto">

                        <div class="heading-block center">
                            <img src="{{asset('res/demos/barber/images/icons/team.svg')}}" alt="Image" height="50"
                                style="margin-bottom: 20px">
                            <h3 class="ls2">My Photo</h3>
                            <span>A little bit photo of me, Travelling and Explore to....</span>
                        </div>

                        <div class="row">
                            <!-- Team 1
							============================================= -->
                            <div class="col-md-4 bottommargin">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{{asset('assets/gambarindex/gambarindex3.jpeg')}}" alt="John Doe">
                                        <div class="bg-overlay">
                                            <div
                                                class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                                                <div class="d-flex mb-3" data-hover-animate="fadeInUp"
                                                    data-hover-animate-out="fadeOutDown" data-hover-speed="400"
                                                    data-hover-parent=".team">
                                                    <!-- <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-facebook"
                                                        title="Facebook">
                                                        <i class="icon-facebook"></i>
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-gplus"
                                                        title="gplus">
                                                        <i class="icon-gplus"></i>
                                                        <i class="icon-gplus"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-instagram"
                                                        title="instagram">
                                                        <i class="icon-instagram"></i>
                                                        <i class="icon-instagram"></i>
                                                    </a> -->
                                                </div>
                                                <a a href="{{url('/liststory')}}" data-href="#mypost"
                                                    class="button button-large button-color m-0 w-100 text-center"
                                                    data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp"
                                                    data-hover-speed="400" data-hover-parent=".team">My Post</a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="400" data-hover-parent=".team"></div>
                                        </div>
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title">
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team 2
							============================================= -->
                            <div class="col-md-4 bottommargin">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{{asset('assets/gambarindex/gambarindex2.jpeg')}}"
                                            alt="Josh Thompson">
                                        <div class="bg-overlay">
                                            <div
                                                class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                                                <div class="d-flex mb-3" data-hover-animate="fadeInUp"
                                                    data-hover-animate-out="fadeOutDown" data-hover-speed="400"
                                                    data-hover-parent=".team">
                                                    <!-- <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-facebook"
                                                        title="Facebook">
                                                        <i class="icon-facebook"></i>
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-gplus"
                                                        title="gplus">
                                                        <i class="icon-gplus"></i>
                                                        <i class="icon-gplus"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-instagram"
                                                        title="instagram">
                                                        <i class="icon-instagram"></i>
                                                        <i class="icon-instagram"></i>
                                                    </a> -->
                                                </div>
                                                <a href="{{url('/liststory')}}"
                                                    class="button button-large button-color m-0 w-100 text-center"
                                                    data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp"
                                                    data-hover-speed="400" data-hover-parent=".team">My Post</a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="400" data-hover-parent=".team"></div>
                                        </div>
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title">
                                            <!-- <h4>Josh Thompson</h4><span>Barber</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team 3
							============================================= -->
                            <div class="col-md-4 bottommargin">
                                <div class="team">
                                    <div class="team-image">
                                        <img src="{{asset('assets/gambarindex/gambarindex3.jpeg')}}" alt="Mary Jane">
                                        <div class="bg-overlay">
                                            <div
                                                class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                                                <div class="d-flex mb-3" data-hover-animate="fadeInUp"
                                                    data-hover-animate-out="fadeOutDown" data-hover-speed="400"
                                                    data-hover-parent=".team">
                                                    <!-- <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-facebook"
                                                        title="Facebook">
                                                        <i class="icon-facebook"></i>
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-gplus"
                                                        title="gplus">
                                                        <i class="icon-gplus"></i>
                                                        <i class="icon-gplus"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="social-icon si-rounded si-colored si-small si-instagram"
                                                        title="instagram">
                                                        <i class="icon-instagram"></i>
                                                        <i class="icon-instagram"></i>
                                                    </a> -->
                                                </div>
                                                <a href= "{{url('/liststory')}}"
                                                    class="button button-large button-color m-0 w-100 text-center"
                                                    data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp"
                                                    data-hover-speed="400" data-hover-parent=".team">My Post</a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                data-hover-speed="400" data-hover-parent=".team"></div>
                                        </div>
                                    </div>
                                    <div class="team-desc">
                                        <div class="team-title">
                                            <!-- <h4>Mary Jane</h4><span>Junior Barber</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Contact Page Section
				============================================= -->
                <!-- <div id="contact" class="row align-items-stretch page-section pt-0 clearfix">

                    <div class="col-lg-6 px-0 d-none d-md-block">
                        <div class="gmap h-100" data-address="Ibiza, Spain" data-zoom="5" data-markers='[{ address: "Ibiza, Spain", icon:{ image: "res/demos/barber/images/map-marker.png", iconsize: [32, 39], iconanchor: [16,36] } }]' data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'></div>
                    </div>

                    <div class="col-lg-6 col-padding" style="background-color: #F9F9F9;">
                        <div>
                            <h3 class="text-uppercase">Our Headquarters</h3>
                            <div class="row topmargin-sm clearfix" style="font-size: 16px; line-height: 1.7;">
                                <div class="col-lg-6">
                                    <address style="line-height: 1.7;">
										<strong>North America:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
                                </div>
                                <div class="col-lg-6">
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                </div>
                            </div>

                            <div class="form-widget">

                                <div class="form-result"></div>

                                <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-4 form-group">
                                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
                                        </div>

                                        <div class="col-md-8 form-group">
                                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-12 form-group">
                                            <textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
                                        </div>

                                        <div class="col-12 form-group">
                                            <button class="button button-large button-color ml-0 topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                        </div>

                                        <div class="col-12 form-group d-none">
                                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                        </div>
                                    </div>

                                    <input type="hidden" name="prefix" value="template-contactform-">

                                </form>

                            </div>
                        </div>
                    </div>

                </div> -->

                <a href="{{url('/liststory')}}" class="button button-full bg-color font-secondary center"
                    style="padding: 60px 0; background-image: url('res/demos/barber/images/sections/4.jpg'); background-repeat: no-repeat; background-position: 10% 50%; background-size: cover;">
                    <div class="container clearfix">
                        This is a Nella's Journey Story &rarr;
                    </div>
                </a>

            </div>
        </section>
        <!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark" style="background-color: #121212; padding: 60px 0">

            <div class="container clearfix">

                <!-- Footer Widget
				============================================= -->
                <div class="footer-widgets-wrap center clearfix">

                    <img src="{{asset('res/newimage/mylogo.png')}}" width="350" height="100" alt="Image">

                    <div class="topmargin-lg clearfix">
                        <a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                    </div>

                    <div class="text-uppercase ls3" style="color: #333; margin-top: 10px">&copy; Nella's Production.
                    </div>

                </div>

            </div>

        </footer>
        <!-- #footer end -->

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{{asset('res/js/jquery.js')}}"></script>
    <script src="{{asset('res/js/plugins.min.js')}}"></script>
    <!-- <script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script> -->

    <!-- Footer Scripts
	============================================= -->
    <script src="{{asset('res/js/functions.js')}}"></script>

</body>

</html>
<script>
    var i = 0;
    var txt = 'Kiss Kiss From <br><h3>Nella</h3>';
    var speed = 250;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("animation").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    };
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });
</script>