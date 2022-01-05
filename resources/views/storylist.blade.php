<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <!-- <link
        href="{{asset('res/myfont.css?family=PT+Sans+Caption:400,700|PT+Sans:400,700|PT+Serif:400,400i&display=swap')}}"
        rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Document Title
	============================================= -->
    <title>Nella Life Story</title>

    <style>
       
        .float {
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 40px;
            right: 40px;
            background-color: #0C9;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float {
            margin-top: 22px;
        }

        @import 'https://fonts.googleapis.com/css?family=Lily+Script+One';

        body {
            background: #eee;
            font-family: 'Lily Script One';
        }

        x .card img:hover {
            webkit-filter: blur(4px);
            filter: blur(4px);
        }

        #about :after {
            margin: 10px auto 0;
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

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


        /* Visit https://nicolaskadis.info/posts/pure-css-flip-cards-using-bootstrap-4-and-css-grid-no-js for an explanation */

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
        <header id="header" class="transparent-header dark header-size-md sticky-header" data-sticky-class="not-dark"
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

                        <!-- <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                        </div> -->



                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu ">

                            <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1300"
                                data-offset="0">
                                <li class="menu-item active"><a class="menu-link" href="{{ url('/') }}"
                                        data-href="#wrapper">Home</a></li>
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-offset="56" data-href="#about">Story List</a></li> -->
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-href="#mypost">My Post</a></li> -->
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#testimonial">Quote
                                        List</a></li>
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-href="#testimonial">Testimonial</a></li>-->
                                <!-- <li class="menu-item"><a class="menu-link" href="#" data-href="#myphoto">My Photo</a></li> -->
                                <li class="menu-item">
                                    <a a href="#" data-href="#mypost" data-offset="0" data-easing="easeInOutExpo"
                                        data-speed="1300" class="button button-color reverse"><i
                                            class="icon-calendar2"></i> Story List</a>
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


        <!-- Content
		============================================= -->
        <section id="content" style="border-top: 8px solid #ffffff">

            <div class="content-wrap py-0">

                <!-- About Section
				============================================= -->
                <div id="about" class="section m-0 bg-transparent page-section" style="padding: 10px 0">
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <!-- <div class="col-md-3 col-6 d-none d-md-block">
                                <img src="{{asset('res/newimage/gedung.jpeg')}}" alt="Image">
                             
                                <img src="{{asset('res/newimage/sunset.jpeg')}}" alt="Image" style = "margin-top:20px;">
                            </div> -->
                            <div class="col-md-12 col-12 center" style="padding: 0 20px;">
                                <!-- <img src="{{asset('res/newimage/list.png')}}" alt="Image" height="30" width="30"
                                    style="margin-bottom: 20px"> -->
                                <!-- <div class="heading-block bottommargin-sm">
                                    <h2>Story List</h2>
                                </div> -->


                                <!-- <img src="{{asset('res/demos/barber/images/about/sign.png')}}" alt="Image" width="200"> -->
                            </div>
                            <!-- <div class="col-md-3 col-6 d-none d-md-block">
                            <img src="{{asset('res/newimage/fotoaboutme3.jpeg')}}" alt="Image">
                             
                             <img src="{{asset('res/newimage/fotoaboutme1.jpg')}}" alt="Image" style = "margin-top:20px;">
                            </div> -->
                        </div>
                    </div>
                </div>



                <center>
                    <div style="width:80% !important;">
                        <div class="row">
                            <div class="container">
                                <?php

                                $index = 1;

                                ?>
                                <div class="row">
                                    @foreach($allstory as $key => $as)
                                    <?php if($index == 4 )
                                { echo "</div><div class = 'row'>";}
                                ?>
                                    <div class="col-md-4 card-container">
                                        <div class="card-flip">
                                            <div class="card front">
                                                <img src="{{asset('res/newimage/gedung.jpeg')}}" style="height:250px;"
                                                    class="card-img-top img-fluid">
                                                <div
                                                    style="position:absolute;right:20px;top:20px;font-size:10px;font-weight:bold;background-color:#BF9456;color:white;border-radius:10px;width:125px;height:20px; padding-top:2px; ">

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
                                                                Jakarta, Indonesia<br></span>

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
                                    </div>
                                    <?php if($index == 4 )
                                { 
                                  $index = 1;   
                                }
                                else
                                {
                                    $index++;
                                }
                                ?>


                                    @endforeach
                                    <br />

                                    <div style = "width:100%;text-align:center;margin-top:30px;">
                                        {{ $allstory->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>

                    <!-- FLoating Button -->
                    <a href="#" class="float" style="line-height:20px;padding-top:15px;z-index:50000;">

                        <i class="bi bi-funnel-fill my-float" style="font-size:25px !important;"></i><br>
                        <span style="margin-top:5px;font-size:15px !important;font-weight:bold;">
                            Filter
                        </span>
                    </a>
                    <!-- End Floating Button -->

                </center>

                <!-- Testimonial Page Section
				============================================= -->

                <!-- Barber Teams
				============================================= -->

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

                <a href="#" class="button button-full bg-color font-secondary center"
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
    <!-- <div id="gotoTop" class="icon-angle-up"></div> -->

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

    // function showimage(x){

    //     $("#kotakdetail").css("display",'block');

    // }
    // function closeimage(x){
    //     alert("test");
    //     $("#kotakdetail").css("display",'none');
    // }
</script>