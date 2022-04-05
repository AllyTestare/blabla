<!DOCTYPE html>
<html style="scroll-behavior: smooth;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Test </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
       <!-- Lato -->
       
       

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Responsive Styles -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.animatedheadline.css') }}">
        <style>@import url(resources/css/main.css);</style>
    </head>
    <!-- oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" -->
    <body id="body">

<div id="preloader">
    <div class="book">
      <div class="book__page"></div>
      <div class="book__page"></div>
      <div class="book__page"></div>
    </div>
</div>

<!-- 
Header start
==================== -->
<div class="navbar-default navbar-fixed-top" id="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img class="logo-1" src="images/logo.png" alt="LOGO">
                <img class="logo-2" src="images/logo-2.png" alt="LOGO">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right" id="top-nav">
                <li class="current"><a href="#body">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>

<section id="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="intro animate-clip">
                    <h2 >Welcome to My Website</h2>
                    <h1 class="ah-headline">
                        <span class="ah-words-wrapper">
                        <b class="is-hidden">Daliran Ally</b>
                        <b class="is-hidden">Web Designer</b>
                        <b class="is-visible">Web Developer</b>
                        </span>
                    </h1>
                    <div class="wow fadeInDown" data-wow-delay="0.3s">
                        <a class="btn btn-default btn-home" href="#contact" role="button">Contact Me</a>
                    </div>
            </div>  
            </div>
                        <div class="col-md-5 wow zoomIn">
                                <div class="counter">
                                    <ul id="countdown_dashboard">
                                        <div class="skills">
                                            <h1>My Skills</h1>
                                            <li>
                                                <h3>HTML</h3><span class="bar"><span class="html"></span></span><h5>90%</h5>
                                            </li>
                                            <li>
                                                <h3>CSS</h3><span class="bar"><span class="css"></span></span><h5>80%</h5>
                                            </li>   
                                            <li>
                                                <h3>PHP</h3><span class="bar"><span class="php"></span></span><h5>85%</h5>
                                            </li>   
                                            <li>
                                                <h3>MySQL</h3><span class="bar"><span class="mysql"></span></span><h5>75%</h5>
                                            </li>   
                                            <li>
                                                <h3>Laravel</h3><span class="bar"><span class="laravel"></span></span><h5>90%</h5>
                                            </li>    
                                            <li>
                                                <h3>WordPress</h3><span class="bar"><span class="wordpress"></span></span><h5>90%</h5>
                                            </li>      
                                            <li>
                                                <h3>Javascript</h3><span class="bar"><span class="javascript"></span></span><h5>70%</h5>
                                            </li>      
                                            <li>
                                                <h3>Vuejs</h3><span class="bar"><span class="vuejs"></span></span><h5>75%</h5>
                                            </li>   
                                            <li>
                                                <h3>Nodejs</h3><span class="bar"><span class="nodejs"></span></span><h5>75%</h5>
                                            </li>     
                                        </div>
                                    </ul>
                                </div>
                        </div>
                                    
        </div><!-- .row close -->
    </div><!-- .container close -->
    
</section><!-- header close -->

    <div class="infinite-line1">
        <div class="divider-hero-home"></div>
    </div>

<!-- 
About start
==================== -->
<section id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 wow fadeInLeft">
                <div class="about-text">
                    <h1>Daliran Ally</h1>
                    <h2 class="rainbow-text">Full-Stack-Developer</h2>
                </div>
                <div class="block">
                    
                    <p>
                    I am a WordPress & Front-end Developer, working for the last five years. I have experience working with local clients along with clients from all around the world. I have vast knowledge in html, css, Javascript , JQuery, Angular (javascript framewok), wordpress theme development and so on.
                    </p>
                
                    <div class="wow fadeInDown" data-wow-delay="0.3s">
                        <a class="btn btn-default btn-home" href="files/CV_Daliran_Ally_en.pdf" role="button">Download CV</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="about-slider">
                    <div>
                        <div class="about-item">
                            <img src="images/about/da-1.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #about close -->
<!-- 
About start
==================== -->

    <div class="infinite-line2">
        <div class="divider-hero-home"></div>
    </div>

<!-- 
Service start
==================== -->
<section id="service" class="section">
    <div class="container">
        <div class="row">
            <div class="heading wow fadeInUp">
                <h2>Our service</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInLeft">
                <div class="service">
                    <div class="icon-box">
                        <span class="icon">
                            <i class="ion-android-desktop"></i>   
                        </span>
                    </div>
                    <div class="caption">
                        <h3>Fully Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="service">
                    <div class="icon-box">
                        <span class="icon">
                            <i class="ion-speedometer"></i>   
                        </span>
                    </div>
                    <div class="caption">
                        <h3>Speed Optimized</h3>
                        <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="service">
                    <div class="icon-box">
                        <span class="icon">
                            <i class="ion-ios-infinite-outline"></i>   
                        </span>
                    </div>
                    <div class="caption">
                        <h3>Tons of Feature</h3>
                        <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                <div class="service">
                    <div class="icon-box">
                        <span class="icon">
                            <i class="ion-ios-cloud-outline"></i>   
                        </span>
                    </div>
                    <div class="caption">
                        <h3>Cloud Option</h3>
                        <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container close -->
</section><!-- #service close -->

        <div class="infinite-line3">
            <div class="divider-hero-home"></div>
        </div>
<!-- #call-to-action close -->
<section id="call-to-action" class="section">
    
<div class="slider">
    <div class="slide-track">
        <div class="slide">
            <img class="bordershadow" src="./images/projects/img1.jpg"/>
        </div>
        <div class="slide">
            <img class="bordershadow" src="./images/projects/img2.jpg"/>
        </div>
        <div class="slide">
            <img class="bordershadow" src="./images/projects/img3.jpg"/>
        </div>
        <div class="slide">
            <img class="bordershadow" src="./images/projects/img4.jpg"/>
        </div>
        <div class="slide">
            <img class="bordershadow" src="./images/projects/img5.jpg"/>
        </div>
        <div class="slide">
            <img class="bordershadow" src="./images/projects/img6.jpg"/>
        </div>

            <!-- dublate -->
            <div class="slide">
                <img src="./images/projects/img1.jpg"/>
            </div>
            <div class="slide">
                <img src="./images/projects/img2.jpg"/>
            </div>
            <div class="slide">
                <img src="./images/projects/img3.jpg"/>
            </div>
            <div class="slide">
                <img src="./images/projects/img4.jpg"/>
            </div>
            <div class="slide">
                <img src="./images/projects/img5.jpg"/>
            </div>
            <div class="slide">
                <img src="./images/projects/img6.jpg"/>
            </div>
    </div>

</div>

</section>
<!-- #call-to-action close -->

         <div class="infinite-line4">
                <div class="divider-hero-home"></div>
            </div>

<!-- 
Contact start
==================== -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="block">
                    <div class="heading wow fadeInUp">
                        <h2>Get In Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
                <div class="block text-left">
                    <div class="sub-heading">
                        <h4>Contact Address</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quos maxime voluptate doloribus, voluptatum nemo vel ipsa in eligendi, ullam. Ducimus consequuntur labore error hic.</p>
                    </div>
                    <address class="address">
                        <hr>
                        <p>Bucharest<br> Romania</p>
                        <hr>
                        <p><strong>Email:</strong>&nbsp;allybaba0506@gmail.com<br>
                        <strong>Phone:</strong>&nbsp;+40732...</p>
                        
                        
                    </address>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                <div class="form-group">
                    <form action="#" method="post" id="contact-form">
                        <div class="input-field">
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                        </div>
                        <div class="input-field">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                        <div class="input-field">
                            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                        </div>
                        <button class="btn btn-send" type="submit">Send me</button>
                    </form>

                    <div id="success">
                        <p>Your Message was sent successfully</p>
                    </div>
                    <div id="error">
                        <p>Your Message was not sent successfully</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section clas="wow fadeInUp">
    <div class="map-wrapper">
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <p>Created by <a href="http://www.google.ro">AllyBaba</a> <em>"To steal ideas from one person is plagiarism - to steal from many is research."</em></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Js -->
<script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.10.2.min.js') }}"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
<script src="{{ asset('js/jquery.lwtCountdown-1.0.js') }}"></script>
<!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.nav.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/min/main.min.js') }}"></script>
<script src="{{ asset('js/jquery.animatedheadline.min.js') }}"></script>
<script>
    $(function() {
        $('.animate-clip').animatedHeadline({
            animationType: 'clip'
        });
    })
</script>

</body>
</html>





    
