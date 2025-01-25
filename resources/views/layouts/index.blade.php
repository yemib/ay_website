<!DOCTYPE html>
<?php 
use App\page;
use App\contact_detail;
use App\logos;

$pages = page::where('publish'  , 'yes')->paginate(6);

$contact  = contact_detail::first();
$logo  = logos::first();


?>

<html dir="ltr" style="" class=" svg picture video rgba preserve3d placeholder srcset inlinesvg supports svgclippaths no-touchevents details objectfit object-fit bgsizecover borderimage csscolumns csscolumns-width no-csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox flexboxlegacy no-flexboxtweener flexwrap csstransforms csstransforms3d no-csstransformslevel2 csstransitions js" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">





<meta name="title" content="{{ config('app.name') }}">


<link rel="alternate" hreflang="x-default" href="">
<link rel="shortlink" href="">
<link rel="canonical" href="">
<link rel="alternate" hreflang="es" href="es">

<link rel="alternate" hreflang="en" href="">


<meta name="description" content="{{ config('app.name') }}">


<meta name="abstract" content="{{ config('app.name') }}">


<meta name="Generator" content="">

<meta name="MobileOptimized" content="width">

<meta name="HandheldFriendly" content="true">

<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="shortcut icon" href="{{$logo->image}}" >


<link rel="revision" href="homepage">

    <title>AP Movers  &amp; Cleaners</title>
    
    <meta name="application-name" content="">
    <meta name="msapplication-TileColor" content="#ffa800">
    
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#555555">

    <!-- Chrome Icons -->
    <link rel="icon" sizes="192x200" href="{{$logo->image}}">

    <!-- Safari Icons -->
    <link rel="apple-touch-icon" href="{{$logo->image}}">
    
    <link rel="apple-touch-icon" sizes="76x76" href="{{$logo->image}}">
    
    


    <!-- IE Icons -->
    <meta name="msapplication-square70x70logo" content="{{$logo->image}}">
    <meta name="msapplication-square150x150logo" content="{{$logo->image}}">
    <meta name="msapplication-wide310x150logo" content="{{$logo->image}}">

    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" media="all" href="{{ asset('css/css_xehN6l-UDXBDDeL3m-7PjuzZHfNwm6DNouf8p_l1wNI.css')}}">

<link rel="stylesheet" media="all" href="{{ asset('css/slick.css')}}">
<link rel="stylesheet" media="all" href="{{ asset('css/solid.css')}}">
<link rel="stylesheet" media="all" href="{{ asset('css/regular.css')}}">
<link rel="stylesheet" media="all" href="{{ asset('css/brands.css')}}">
<link rel="stylesheet" media="all" href="{{ asset('css/css_eSC7rx2DIDcAXX-bT37EvASjN-S0Cam2lBia1h20ZxE.css')}}">
<link rel="stylesheet" media="all" href="{{ asset('css/css.css')}}">
<link rel="stylesheet" media="all" href="{{ asset('css/general.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

<script src="{{ asset('js/js_znOsrOG_a4RIy29bHWrpzo8AGWXErWtudTd2wLjLQWM.js')}}"></script>

  <style></style>
  
  </head>
  
  
  <body   style="font-family:FjallaOne" class="path-frontpage page-node-type-landing-page default has-cookie-banner">
   


 <a href="#main-content" class="visually-hidden focusable skip-link">
      Skip to main content
    </a>
     
     <!--   the whole body div--->
     
      <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas="">
      
      <!---   sub body here --->
    
<div id="page" class="landing-page no-sidebars">

<!---  menu   --->
  <header id="header-wrapper" role="banner">
  <div id="header" class="nav-small">
                <div id="header__top">
      <div class="layout-container">
          <div class="region region-header">
    <div id="block-chosenlocation" class="block tmt-location-chosen">
  
    
      <div class="location-block" data-content="tmt_location_chosen">  <span class="location-block__address">
    <i class="fa fa-map-marker"></i> <span class="label"><a >Find a Location</a></span> 
  </span>
  
  <span class="location-block__phone">
    <i class="fa fa-phone"></i> 
<a href="tel:{{ $contact->phone1 }}" data-organic="{{ $contact->phone1 }}" data-metro="{{ $contact->phone1 }}" data-display="{{ $contact->phone1 }}" data-paid="{{ $contact->phone1 }}" class="phone"><span class="number">{{ $contact->phone1 }}</span></a>

  </span>

 
  <span class="location-block__phone">
    <i class="fa fa-phone"></i> 
<a href="tel:{{ $contact->phone2 }}" data-organic="{{ $contact->phone2 }}" data-metro="{{ $contact->phone2 }}" data-display="{{ $contact->phone2 }}" data-paid="{{ $contact->phone2 }}" class="phone"><span class="number">{{ $contact->phone2 }}</span></a>

  </span>

 
 
 </div>
  </div>

  </div>

      </div>
    </div>
    <div id="header__bottom">
      <div class="layout-container">
        <!-- logo area --->
        <a id="logo" name="Home" href="/"   style="background-image: url({{$logo->image}})">
        
        
        <span class="visually-hidden">Homes</span>      
        
        
        </a>
        
        <button aria-controls"mainnavigation-ul="" secondarymenu-ul"="" aria-expanded="false" aria-haspopup="true" aria-labelledby="mobile-menu-text" id="toggle-menu">
          <span class="bar first"></span>
          <span class="bar middle"></span>
          <span class="bar last"></span>
          <span id="mobile-menu-text">Menu</span>
        </button>
          <div class="region region-primary-menu">
          
    <nav role="navigation" aria-labelledby="block-mainnavigation-menu" id="block-mainnavigation" class="block system-menu-block-main block-menu navigation menu--main">
            
  <h3 class="visually-hidden" id="block-mainnavigation-menu">Main navigation</h3>
  
<!---below main menu--->
        
<ul class="menu menu-level-0" id="mega-menu">
  
  <li class="menu-item no-children">
    <a href="/" data-drupal-link-system-path="node/23451">Home</a>

                            
      <div class="menu--megamenu" style="display: none;">
        
  	 
	
      </div>
    
  </li>
   
   
   
  <li class="menu-item no-children">
    <a href="/service" data-drupal-link-system-path="node/23442">Services</a>

                            
      <div class="menu--megamenu" style="display: none;">
     
      </div>
    
  </li>
  
  <!---
     <li class="menu-item no-children">
    <a href="/survey" data-drupal-link-system-path="node/23394">Survey</a>

                            
      <div class="menu--megamenu" style="display: none;">
        
  		
	
      </div>
    
  </li>
  --->
     
    
    
    
    <?php 
	foreach($pages  as $page){  
	?>
    
    
  <li class="menu-item no-children">
    <a href="/page/{{$page->id}}/{{$page->title}}" data-drupal-link-system-path="node/23451">{{$page->title}}</a>

                            
      <div class="menu--megamenu" style="display: none;">
        
  	 
	
      </div>
    
  </li>

  
  
  <?php   }?>

  <li class="menu-item no-children">
    <a href="/contact-us" data-drupal-link-system-path="node/23370">Contact Us</a>

                            
      <div class="menu--megamenu" style="display: none; height: 436.2px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
     
      </div>
    
  </li>
  
  
  <?php   if(session('admin')) {  ?>
  <li class="menu-item no-children">
    <a  target="_blank" href="/admins" data-drupal-link-system-path="node/23370">Admin</a>

                            
      <div class="menu--megamenu" style="display: none; height: 436.2px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
     
      </div>
    
  </li>
  
  <?php  } ?>
  
  
  <!---
  
  <li class="menu-item no-children">
    <a href="/blog" data-drupal-link-system-path="movers/search">Blog</a>

                            
      <div class="menu--megamenu" style="display: none; height: 436.2px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
       
       
	
	
      </div>
    
  </li>
  
  ---->
  
</ul>

  </nav>

  </div>

          <div class="region region-secondary-menu">
    <nav role="navigation" aria-labelledby="block-secondarymenu-menu" id="block-secondarymenu" class="block system-menu-block-secondary-menu block-menu navigation menu--secondary-menu">
            
  <h3 class="visually-hidden" id="block-secondarymenu-menu">Secondary Menu</h3>
  

        
              <ul data-region="secondary_menu" class="clearfix menu">
             
            
               
                <li class="menu-item">
       
              </li>
        </ul>
  


  </nav>
<div class="search-block-form block search-(form-block block-search container-inline" data-drupal-selector="search-block-form" id="block-searchform" role="search">
  
  
  </div>

  </div>

      </div>
    </div>
  </div>
  </header>
  
  
  
  @yield('content')

    
    
    <!----   this the footer here   ---->
  
  <footer id="footer-wrapper" role="contentinfo">
  <div id="footer" class="footer">
    <div id="footer__top" class="footer__top">
      <div class="layout-container">
          <div class="region region-footer-top">
    <div id="block-haveaquestionwereheretohelp" class="block block-content-f7477de4-af4d-4125-8775-7873cdd51d9b">
  
      <h3>Have a question???? We're here to help</h3>
    
      
            <div class="clearfix text-formatted field field--name-field-markup-body field--type-text-long field--label-hidden field__item"><div class="footer-contact">Call Corporate Customer Service: <a href="tel: {{  $contact->phone1  }}"> {{  $contact->phone1  }}  </a></div>
<div class="footer-contact">Call to Find a Location: <a href="tel:{{  $contact->phone2  }}">   {{  $contact->phone2  }}  </a></div>
<div class="footer-button"><a class="button button--primary" href="/contact-us">Contact Us</a></div>
</div>
      
  </div>
<nav role="navigation" aria-labelledby="block-footer-menu" id="block-footer" class="block system-menu-block-footer block-menu navigation menu--footer">
      
  <h3 id="block-footer-menu">Discover More</h3>
  

        
             <?php   $allpages  = page::get();  ?>
             
             
              <ul data-region="footer_top" class="clearfix menu">
             <?php   foreach($allpages   as $allpages) {  ?>
     
                    <li class="menu-item">
                   
        <a href="/page/{{  $allpages->id  }}/{{  $allpages->title  }}">{{  $allpages->title  }}</a>
              </li>
              
              
              <?php  } ?>
        </ul>
  


  </nav>
<div id="block-socialmedialinks" class="block tmt-social-media">
  
      <h3>Connect with us</h3>
    
      <div class="location-block" >
      
      <ul class="social-links inline">
      
      
      
      
      
	<li><a href="https://www.facebook.com/{{ $contact->facebook }}" class="icon--social"><i class="fa fa-facebook"></i><span class="visually-hidden">Facebook</span></a></li>
	
	
	
	<li><a href="https://twitter.com/{{ $contact->twitter }}" class="icon--social"><i class="fa fa-twitter"></i><span class="visually-hidden">Twitter</span></a></li>
	
	
	<li><a href="https://plus.google.com/{{ $contact->google }}" class="icon--social"><i class="fa fa-google-plus-circle"></i><span class="visually-hidden">Google Plus</span></a></li>
	
	<li><a href="https://www.pinterest.com/{{ $contact->pinterest }}" class="icon--social"><i class="fa fa-pinterest-p"></i><span class="visually-hidden">Pinterest</span></a></li>
	
	
	<li><a href="https://www.youtube.com/user/{{ $contact->youtube}}" class="icon--social"><i class="fa fa-youtube-square"></i><span class="visually-hidden">YouTube</span></a></li>
	
	
	<li><a href="https://www.linkedin.com/company/{{ $contact->linkedin }}" class="icon--social"><i class="fa fa-linkedin-square"></i><span class="visually-hidden">LinkedIn</span></a></li>
	
	
	<li><a href="https://www.instagram.com/{{ $contact->instagram }}/" class="icon--social"><i class="fa fa-instagram"></i><span class="visually-hidden">Instagram</span></a></li>
	
	
</ul>
</div>
  </div>

  </div>

      </div>
    </div>
    <div id="footer__bottom" class="footer__bottom">
      <div class="layout-container">
          <div class="region region-footer-bottom">
    <div id="block-copyright" class="block block-content-96cd0c35-09b8-427e-b3e6-e06ca0d1e9eb">
  
    
      
            <div  align="center" class="clearfix text-formatted field field--name-field-markup-body field--type-text-long field--label-hidden field__item">
            
            
            <p>Copyright 2021 {{ config('app.name') }} | All Rights Reserved · </p>


      
  </div>
  
  
  
<div id="block-locationdetails" class=""  >
  
    
      <div   style="">
      
      
      
      <div id="location-bar" class="location-bar location-bar--small">

  <div class="location-bar__top layout-container"    >

    <div class="location-name">
              <h2></h2>
          </div>

    <div class="location-buttons">
      <div class="location-block " >
      
      <div class="field field--name-field-loc-phone-organic">
  
<a href="tel: {{  $contact->phone1  }}"  class="phone"> <span class="glyphicon glyphicon-phone">  </span>  <span class="">Call</span> <span class="desktop-label"><span class="number"> {{  $contact->phone1  }}</span></span></a>

</div>
</div>

      
      <div class="">
       
        <a href="tel: {{  $contact->phone2  }}" class="phone"><span class="glyphicon glyphicon-phone">  </span> <span class="desktop-label"><span class="number"> {{  $contact->phone2  }}</span></span></a>
        
        
      </div>
    </div>
  </div>

</div>

</div>
 
 
 
  </div>

  </div>

      </div>
    </div>
  </div>
  </footer>
  
  
  
  

</div>
 
 
 
  </div>

    
    
    
    
    
    <!---  this area is majorly for script   --->
    
    
    
    

    
<script src="{{ asset('js/js_RyMBFrMzqsk2dF5cxG_dtHVCTBQnxgBusTUM0b78pR8.js')}}"></script>
<script src="{{ asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>

  

<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.6382129043213013"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.39623005093622" alt="" src="{{asset('img/0.txt')}}" width="0" height="0"></div>

<script type="text/javascript" id="">
	
	(function(){var a=document.createElement("DIV");a.id="sponsorText";a.style.position="absolute";a.style.left="-999px";a.appendChild(document.createTextNode("\x26nbsp;"));document.body.appendChild(a);setTimeout(function(){if(a){var b=0==a.clientHeight;b?dataLayer.push({event:"Content Blocked",AdBlock:b}):dataLayer.push({event:"Content Allowed",AdBlock:b});document.body.removeChild(a)}},10)})();</script>

<div style="display: none; visibility: hidden;">




<noscript></noscript>


</div>




<div style="display: none; visibility: hidden;">
<img style="border-style:none;" alt="" src="{{asset('img/a.txt')}}" width="1" height="1">
</div>

<style>
	  
	.location-bar{
		
		bottom: 0px !important
	}
	
	
	
@media only screen and (min-width: 769px) {
	

	#tall_height{

		 height: 1080px !important;
		
		
	}
	
}
	
	
	  </style>
	  
	  
	  @include('script')

</body>

</html>