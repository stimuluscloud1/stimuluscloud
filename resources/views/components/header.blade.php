<!DOCTYPE html {{ str_replace('_', '-', app()->getLocale()) }}>
<html lang="en">
<head>

<!-- meta tags -->
<meta charset="utf-8">
<!-- Title -->
<title>{{ $title }}</title>
<meta name="keywords" content="{{ $keywords }}" />
<meta name="description" content="{{ $description }}" />
<meta name="author" content="{{ $author }}" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!---Google Web Master --->
{{-- <meta name="google-site-verification" content="yEEIl5-cYJhXHyx7o8kXmN4KujvzxEh6mihaHYNI2Ts" /> --}}

<!-- Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122348578-2"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122348578-2');
</script> --}}

<!---Schema MarkUp --->
<script type="application/ld+json"> 
  { 
      "@context" : "http://schema.org",
          "@type" : "Corporation", 
              "description": "Stimulus Cloud is a Specialized IT Company with a Strong Global Presence. We Provide Web Development , Mobile App Development, Ecommerce Development, SEO & Digital Marketing Service. We Serve 5+ Countries.",
                  "address" : {
                      "@type": "PostalAddress",
                          "addressLocality": "KORBA", 
                              "addressRegion": "CHHATTISGARH", 
                                  "postalCode": "495677", 
                                      "streetAddress": "MIG-II/33, FIRST FLOOR, RP NAGAR, PHASE-I, NIHARIKA, KORBA, EAST, CHHATTISGARH" }, 
                                          "name":"STIMULUS CLOUD",
                                              "url":"https://www.stimuluscloud.in",
                                                  "logo": "http://www.stimuluscloud.in/images/logo01.png",
                                                          "email":"info@stimuluscloud.in",
                                                              "telephone":"+91-8982458982",
                                                                  "sameAs": [
              "https://www.facebook.com/Stimuluscloudservices"
              "https://www.instagram.com/stimulus_cloud/"
              "https://twitter.com/stimulus_cloud"
              "https://www.linkedin.com/company/stimuluscloud/"
                                                                  ]
  } 
</script>

<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" />

<!-- inject css start -->

<link href="{{ URL::asset('assets/css/theme-plugin.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/css/theme.min.css') }}" rel="stylesheet" />

<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <span></span>
  </div>
</div>

<!-- preloader end -->

<!--header start-->

<header class="site-header"> 
 <div id="header-wrap">  
    <div class="container">     
      <div class="row">
        <!--menu start-->
        <div class="col d-flex align-items-center justify-content-between">
          {{-- <a class="navbar-brand logo text-dark h2 mb-0" href="{{ 'index' }}"> --}}
              <img src="{{ URL::asset('assets/images/hero/stimuluscloud.in_black.png') }}" style="width: 15% !important" alt="Stimulus Cloud">
            {{-- </a> --}}
          <nav class="navbar navbar-expand-lg navbar-light ml-auto mr-auto">            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link {{ (Request::segment(1) == '') || (Request::segment(1) == 'index') ? 'active' : '' }}" href="{{ url('index') }}">Home</a>
                </li>
                <li class="nav-item"> <a class="nav-link {{ (Request::segment(1) == 'about') ? 'active' : '' }}" href="{{ url('about') }}">About Us</a>
                </li>
                <li class="nav-item"> <a class="nav-link {{ (Request::segment(1) == 'our-services') ? 'active' : '' }}" href="{{ url('our-services') }}">Our Services</a>
                </li>
                <li class="nav-item"> <a class="nav-link {{ (Request::segment(1) == 'our-portfolio') ? 'active' : '' }}" href="{{ url('our-portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item"> <a class="nav-link {{ (Request::segment(1) == 'blog') ? 'active' : '' }}" href="{{ url('blog') }}">Blogs</a>
                </li>
                <li class="nav-item"> <a class="nav-link {{ (Request::segment(1) == 'contact-us') ? 'active' : '' }}" href="{{ url('contact-us') }}">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>  
          <a class="btn btn-primary" href="#">Pay Now</a>                              
        </div>
        <!--menu end-->
      </div>
    </div>
  </div>
</header>

<!--header end-->