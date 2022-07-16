<!DOCTYPE html>
<html style="font-size: 16px;" lang="{{App::getLocale()}}">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Interior Design and Decoration, ​Our Work, ​We design &amp;amp; deliver beautiful hotels, luxury homes and innovative workplace interiors, ​It&amp;apos;s time to design your living spaces, ​Design Your Dream Space">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>@yield('tittle')</title>
    <link type="image/x-icon" href="{{asset('assets/images/d9ce01d0-67a3-4451-88e1-b16a2abd402a-removebg-preview.png')}}" rel="icon">    <link rel="stylesheet" href="{{asset('assets/css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('assets/css/Home.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('assets/js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('assets/js/nicepage.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('assets/js/main.js')}}" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{asset('assets/images/d9ce01d0-67a3-4451-88e1-b16a2abd402a-removebg-preview1.png')}}",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" dir="{{(App::getLocale()=='ar' ? 'rtl' : 'ltr')}}">
    <!-- header navbar -->
      <header class="u-align-left u-clearfix u-header u-section-row-container" id="sec-37e9" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
        <div class="u-section-rows">
    
            @include('Frontweb.includes.headerpage4')
  
        </div>
    </header>

    <!-- Content  -->
    <section>
        @yield('content')
    </section>
  
    <!-- Footer  -->
    <div class="container-fluid"> <output class="bg-white shadow-sm">
        <footer class="section-footer border-top">
            @include('Frontweb.includes.footerpage4')
        </footer>
  </output>
 </div>

 <!-- js function -->
    <script>
      const slider = document.querySelector(".slider input");
      const img = document.querySelector(".images .img-2");
      const dragLine = document.querySelector(".slider .drag-line");
      slider.oninput = ()=>{
        let sliderVal = slider.value;
        dragLine.style.left = sliderVal + "%";
        img.style.width = sliderVal + "%";
      }
    </script>
  
  </body>
</html>