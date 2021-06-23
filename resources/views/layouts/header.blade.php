<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <!-- Basic -->
        <meta charset="utf-8">
        <title>Pico Innovation & Lab</title>
        <meta name="keywords" content="Pico Innovation" />
        <meta name="description" content="Pico Innovation">
        <meta name="author" content="naywinhtun">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link rel="shortcut icon" href="/images/default/favicon.png">
        <!-- Web Fonts  -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' 
        rel='stylesheet' type='text/css'>

        @yield('style')

        <!-- Lib CSS -->
        <link rel="stylesheet" href="{{ asset('/css/lib/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/univershicon.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/prettyPhoto.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/menu.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/lib/timeline.css') }}">
        
        <!-- Revolution CSS -->
        <link rel="stylesheet" href="{{ asset('/revolution/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('/revolution/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('/revolution/css/navigation.css') }}"> 
        
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/theme-responsive.css') }}">
        
        <!--[if IE]>
            <link rel="stylesheet" href="css/ie.css">
        <![endif]-->

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
 	 (adsbygoogle = window.adsbygoogle || []).push({
   	 google_ad_client: "ca-pub-1519852121596153",
   	 enable_page_level_ads: true
 	 });
	</script>
        
        <!-- Head Libs -->
        <script src="{{ asset('/js/lib/modernizr.js') }}"></script>
        
        <!-- Skins CSS -->
        <link rel="stylesheet" href="{{ asset('/css/skins/default.css') }}">
        
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

        </head>
<body>

<!-- Page Loader -->
<div id="pageloader">
    <div class="loader-inner">
        <img src="{{ asset('/images/default/preloader-color.gif') }}" alt="">
    </div>
</div><!-- Page Loader -->

<!-- Back to top -->
<a href="#0" class="cd-top">Top</a>



<!-- End Theme Panel Switcher -->
<div id="theme-panel" class="theme-panel close-theme-panel">
    <!-- Panel Button -->
    <a class="panel-button"><i class="fa uni-gear fa-spin"></i></a>
    
    <!-- Panel Content -->
    <div class="panel-content">
    
        <!-- Options Content -->
        <div class="config panel-btns config-layout">
            <h5 class="title">Layout</h5>
            <ul class="config-options">
                <li><a id="layout-config-boxed" href="#">Boxed</a></li>
                <li><a id="layout-config-wide" href="#">Wide</a></li>
            </ul><!-- Options Config -->
        </div><!-- Options Content -->
        
        <!-- Options Content -->
        <div class="config config-bg">
            <h5 class="title">Boxed Backgrounds</h5>
            <ul class="config-options">
                <li><a id="bg-config-color" href="#"><img src="images/panel/boxed-solid.jpg"></a></li>
                <li><a id="bg-config-pattern" href="#"><img src="images/panel/boxed-pattern.jpg"></a></li>
                <li><a id="bg-config-image" href="#"><img src="images/panel/boxed-image.jpg"></a></li>
            </ul><!-- Options Config -->
        </div><!-- Options Content -->

    </div><!-- Panel Content -->    
</div><!-- End Theme Panel Switcher -->

    
<!-- Header Begins -->  
<header id="header" class="default-header colored flat-menu">
    <div class="header-top">
        <div class="container">
            <nav>
                <ul class="nav nav-pills nav-top">
                    <li class="phone">
                        <span><i class="fa fa-envelope"></i>info@picoinnovation.com</span>                    </li>
                    <li class="phone">
                        <span><i class="fa fa-phone"></i>(959) 444-030-408</span>                  </li>
                </ul>
            </nav>
            <ul class="social-icons color">
                <li class="googleplus"><a title="googleplus" target="_blank" href="http://www.googleplus.com/">googleplus</a></li>
                <li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
                <li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
                <li class="pinterest"><a title="pinterest" target="_blank" href="http://www.pinterest.com/">pinterest</a></li>
                <li class="rss"><a title="rss" target="_blank" href="http://www.rss.com/">rss</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="logo">
            <a href="/">
                 <img alt="Universh" width="155" height="35" data-sticky-width="150" data-sticky-height="28" src="/images/default/logo.png">         </a>        </div>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>      </button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="mega-menu-item mega-menu-fullwidth mega-menu-halfwidth">
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/product">
                            Product
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Services
                            <i class="fa fa-caret-down"></i>                        
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($service_types as $service)
                            <li><a href="/services/{{$service->id}}/all">{{ $service->type }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Media Center
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">                            
                            <li><a href="/news">News</a></li>
                            <li><a href="/events">Events</a></li>
                            <li><a href="/activity">Activities</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/about">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="/contact">
                            Contact
                        </a>
                    </li>                    
                </ul>
            </nav>
        </div>
    </div>
</header><!-- Header Ends -->
