<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zenius Code</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Belajar koding online">
    <meta name="keywords" content="kursus, belajar, php, javascript, laravel, vue js, angular js, html5, css3">
    <meta name="author" content="Heri Lesmana">
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="/js/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <div class="zenc-loader"></div>
    <div id="page">
        <nav class="zenc-nav nav-top" style="background-color: #4d545d !important" role="navigation">
            <div class="zenc-container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div id="zenc-logo" >
                            <a href="index.html">
                                <h1 class="header-logo">Zenius Code</h1> 
                            </a>
                        </div>
                    </div>
                    <div id="navbar-search" class="col-sm-7">
                        <form method="GET" action="/search">
                        <div class="input-group">
                            <span for="search" class="input-group-addon">
                                <span class="search-addon">
                                    <i class="ti-search"></i>
                                </span>
                            </span>
                            <input id="search" name="search" type="search" placeholder="Cari sesuatu yang menarik."/>
                            <span class="input-group-btn">
                                <button type="submit" class="btn submit-search">
                                    <span class="button-search">
                                        CARI
                                    </span>
                                </button>
                            </span>
                        </div>
                        </form>
                    </div>
                    <div class="col-sm-2 right-nav">
                        <a href="login" class="login">
                            LOGIN
                        </a>
                        <a href="register" class="register">
                            DAFTAR
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="zenc-nav nav-bottom" role="navigation">
            <div class="zenc-container">
                <div class="row">
                    <div class="col-xs-12 text-center menu-1">
                        <ul>
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li class="has-dropdown">
                                <a href="services.html">Keahlian</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#">Dasar</a>
                                    </li>
                                    <li>
                                        <a href="#">PHP</a>
                                    </li>
                                    <li>
                                        <a href="#">PHP Framework</a>
                                    </li>
                                    <li>
                                        <a href="#">MEAN</a>
                                    </li>
                                    <li>
                                        <a href="#">Real App</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="portfolio.html">Pelajaran</a>
                            </li>
                            <li>
                                <a href="https://zeniuscode.com/blog">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html">Forum</a>
                            </li>
                            <li>
                                <a href="contact.html">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <header id="zenc-header" class="zenc-cover" role="banner">
            <div class="zenc-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="display-t">
                            <div class="display-tc">
                                <div class="row">
                                    <div class="col-md-5 text-center header-img animate-box">
                                        <img src="/images/cube.png" alt="Free HTML5 Website Template by FreeHTML5.co">
                                    </div>
                                    <div class="col-md-7 copy animate-box">
                                        <h1>Make your life simpler, try this for free.</h1>
                                        <p>
                                            A free template hand-crafted by FreeHTML5.co. Visit our site for more awesome templates.
                                        </p>
                                        <p>
                                            <a href="http://freehtml5.co" target="_blank" class="btn btn-white">Visit FreeHTML5.co</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END #zenc-header -->
        <div class="zenc-client">
            <div class="zenc-container">
                <div class="row">
                    <div class="col-md-2 col-md-offset-1 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0">
                        <img src="/images/client_1.png" alt="Free Website Template by FreeHTML5.co" class="img-responsive">
                    </div>
                    <div class="col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0">
                        <img src="/images/client_2.png" alt="Free Website Template by FreeHTML5.co" class="img-responsive">
                    </div>
                    <div class="col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0">
                        <img src="/images/client_3.png" alt="Free Website Template by FreeHTML5.co" class="img-responsive">
                    </div>
                    <div class="col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0">
                        <img src="/images/client_4.png" alt="Free Website Template by FreeHTML5.co" class="img-responsive">
                    </div>
                    <div class="col-md-2 text-center client col-sm-6 col-xs-6 col-xs-offset-0 col-sm-offset-0">
                        <img src="/images/client_5.png" alt="Free Website Template by FreeHTML5.co" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- END .zenc-client -->
        <div class="zenc-services zenc-section">
            <div class="zenc-container">
                <div class="row row-pb-sm">
                    <div class="col-md-8 col-md-offset-2 zenc-heading text-center">
                        <h2>Make your life simpler.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.
                        </p>
                        <p>
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-special popup-vimeo">Watch The Video</a>
                        </p>
                    </div>
                </div>
                <div class="row row-pb-md">
                    <div class="col-md-4 col-sm-4 service-wrap">
                        <div class="service">
                            <h3><i class="ti-pie-chart"></i> Marketing</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur voluptatibus nesciunt, est alias deleniti ipsum fuga ullam maxime repudiandae neque, ad. Maiores quis atque, culpa rem inventore vero amet praesentium, quam sint, magnam reprehenderit doloremque.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 service-wrap">
                        <div class="service animate-change">
                            <h3><i class="ti-ruler-pencil"></i> Design</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quidem quae, assumenda dolores ad pariatur! Deleniti debitis, voluptatem! Omnis enim magnam perspiciatis, natus. Ipsum distinctio, voluptatibus vero laboriosam sequi! Officia fuga quam eveniet quo similique!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 service-wrap">
                        <div class="service">
                            <h3><i class="ti-settings"></i> Development</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aperiam, maiores officia alias accusantium fugiat, doloremque voluptas, voluptatem dolore vel animi praesentium saepe unde consequuntur, eum asperiores odit aliquam error nulla impedit repellendus. Nesciunt, delectus.
                            </p>
                        </div>
                    </div>
                    <div class="clearfix visible-md-block visible-sm-block"></div>
                </div>
            </div>
        </div>
        <!-- END .zenc-services -->
        <div class="zenc-section zenc-products">
            <div class="zenc-container">
                <div class="row row-pb-sm">
                    <div class="col-md-8 col-md-offset-2 zenc-heading text-center">
                        <h2>Popular Products</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.
                        </p>
                    </div>
                </div>
                <div class="row row-pb-md">
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="zenc-item two-row bg-img animate-box" style="background-image: url(images/img_1.jpg)">
                        <div class="overlay">
                            <i class="ti-arrow-top-right"></i>
                            <div class="copy">
                                <h3>Paper Hot Cup</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <img src="images/img_1.jpg" class="hidden" alt="Free HTML5 Website Template by FreeHTML5.co"></a><a href="#" class="zenc-item two-row bg-img animate-box" style="background-image: url(/images/img_2.jpg)">
                        <div class="overlay">
                            <i class="ti-arrow-top-right"></i>
                            <div class="copy">
                                <h3>Notepad Mockup</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <img src="images/img_2.jpg" class="hidden" alt="Free HTML5 Website Template by FreeHTML5.co"></a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="zenc-item one-row bg-img animate-box" style="background-image: url(images/img_md_1.jpg)">
                        <div class="overlay">
                            <i class="ti-arrow-top-right"></i>
                            <div class="copy">
                                <h3>Paper Pouch</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <img src="images/img_md_1.jpg" class="hidden" alt="Free HTML5 Website Template by FreeHTML5.co"></a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="zenc-item two-row bg-img animate-box" style="background-image: url(images/img_3.jpg)">
                        <div class="overlay">
                            <i class="ti-arrow-top-right"></i>
                            <div class="copy">
                                <h3>Fancy 3D</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <img src="images/img_3.jpg" class="hidden" alt="Free HTML5 Website Template by FreeHTML5.co"></a><a href="#" class="zenc-item two-row bg-img animate-box" style="background-image: url(images/img_4.jpg)">
                        <div class="overlay">
                            <i class="ti-arrow-top-right"></i>
                            <div class="copy">
                                <h3>Hard Cover Book</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <img src="images/img_4.jpg" class="hidden" alt="Free HTML5 Website Template by FreeHTML5.co"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <a href="http://freehtml5.co" target="_blank" class="btn btn-special">Visit Gettemplates.co</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END .zenc-products -->
        <div class="zenc-section zenc-testimonial zenc-gray">
            <div class="zenc-container">
                <div class="row row-pb-sm">
                    <div class="col-md-8 col-md-offset-2 zenc-heading text-center">
                        <h2>People Love Us</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="zenc-testimony zenc-left">
                            <div>
                                <img src="images/person_1.jpg" alt="Free Website template by FreeHTML5.co">
                            </div>
                            <blockquote>
                                <p>
                                    &ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="zenc-testimony zenc-left">
                            <div>
                                <img src="images/person_2.jpg" alt="Free Website template by FreeHTML5.co">
                            </div>
                            <blockquote>
                                <p>
                                    &ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author">&mdash; Steve Jobs</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="zenc-testimony zenc-left">
                            <div>
                                <img src="images/person_3.jpg" alt="Free Website template by FreeHTML5.co">
                            </div>
                            <blockquote>
                                <p>
                                    &ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; Frank Chimero</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="zenc-testimony zenc-left">
                            <div>
                                <img src="images/person_1.jpg" alt="Free Website template by FreeHTML5.co">
                            </div>
                            <blockquote>
                                <p>
                                    &ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="zenc-footer" class="zenc-section" role="contentinfo">
        <div class="zenc-container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 zenc-cta text-center">
                    <h3>We Love To Talk About Your Business</h3>
                    <p>
                        <a href="#" class="btn btn-white btn-outline">Contact Us</a>
                    </p>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-4 zenc-widget zenc-footer-paragraph">
                    <h3>Cube</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod.
                    </p>
                </div>
                <div class="col-md-4 zenc-footer-link">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="zenc-list-link">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
                                </li>
                                <li>
                                    <a href="#">Testimonial</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a href="tel://1234567890">+1 234 4565 2342</a><br>
                                <a href="#"><span class="__cf_email__" data-cfemail="0f666169604f6b60626e6661216c6062">[email&#160;protected]</span>
                                <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]>*/</script>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 zenc-footer-subscribe">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Email address</label><input type="email" class="form-control" id="" placeholder="Email"></div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="zenc-copyright">
            <div class="zenc-container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p>
                            <small>&copy; 2016 Free HTML5. All Rights Reserved.</small>
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>
                            <small>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com" target="_blank">Unsplash</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="/js/main.js"></script>
    <script>
    function hoper(element) {
        element.setAttribute('src', '/images/logo2.png');
    }
    function out(element) {
        element.setAttribute('src', '/images/logo.png');
    }
    </script>
</body>
</html>