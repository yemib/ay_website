<!---thhe banner is here  ---->
  

<?php $__env->startSection('content'); ?>
  
  <?php  

use App\servicess;
use App\contact_detail;
use App\slidders;
use App\logos;

$logo = logos::first();
$service  = servicess::where('publish' , 'yes')->orderby('id', 'desc')->get();


$contact  = contact_detail::first();

$select_slide  = slidders::where('publish' , 'yes')->get();

?>
  
  <a id="main-content" tabindex="-1"></a>
   
    <div class="region region-highlighted"  >
    	<div class="tmt-messages">
		<div data-drupal-messages-fallback="" class="hidden"></div>
	</div>
<div id="block-tmtbanner" class="block tmt-display-banner"  >
  
    
      
<div class="hero hero--tall"    id="tall_height"    style="background-color: white; color: black  ; opacity: 500">
      <div class="banner-video banner-background"   style="opacity: 500">
      <!--   place the banner here -->
      
<div  class="col-sm-6"   >  

<!--   moving images --->

	
  <div  data-aos="zoom-out-up"  id="carousel1" class="carousel slide" data-ride="carousel">
  
  
  
	  <ol class="carousel-indicators">
    
    <?php    for($i = 0; $i < count($select_slide) ; $i++  ) {   


?>
    
	    <li data-target="#carousel1" data-slide-to="<?php echo e($i); ?>" class="  <?php if($i==1): ?> active  <?php endif; ?>"></li>
	
	    
	    
	    <?php   } ?>
	    
	    
    </ol>
	  <div class="carousel-inner" role="listbox">
	  <?php    $count  = 1 ?>
    <?php $__currentLoopData = $select_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
	    <div class="item <?php if($count==1): ?> active  <?php endif; ?>"   style="">
	    
	  
	       
	       
	       <img   src="<?php echo e($sliders->image); ?>" />
	    
  
         
 
          
        </div>  
        
        
        <?php    $count++  ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
    </div>
	  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
            
            </div>

            
<div  class="col-sm-6  form_container"     style="">  
<div  align="center">

<?php echo $__env->make('form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

</div>
 
  
  
</div>


<!--   Text of the video --->

</div>


  </div>

  </div>


  

  <main role="main">
    <div class="layout-container">

      
      <div class="layout-content">
        
          <div class="region region-content">
    <div id="block-tmt-theme-mainpagecontent" class="block system-main-block">
  
    
      

<article role="article" class="node node--type-landing-page node--view-mode-full">

  
    

  
  <div class="node__content">
    
<div class="panels">
      
  <div class="panel background--lightgray" id="panel--45">
        <div class="layout-container">
                        <h2>
            <div class="field field--name-field-panel-header field--type-string field--label-hidden field__item">AP Movers And Cleaners Services </div>
      </h2>
                
            <div class="clearfix text-formatted field field--name-field-panel-body field--type-text-long field--label-hidden field__item">
</div>
      
      <div class="field field--name-field-panel-columns field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">  <div class="columns-1" id="columns-1--44">
          
            <div class="field field--name-field-column-1-content field--type-entity-reference-revisions field--label-hidden field__item">  <div class="block" id="block--43">
          
            <div class="field field--name-field-block field--type-block-field field--label-hidden field__item"><div class="block views-block-tmt-moving-services-block-1">
  
    
      <div class="views-element-container"><div class="view view-tmt-moving-services view-id-tmt_moving_services view-display-id-block_1 js-view-dom-id-ae1fdad04638fc24d02780ce43f0411061f167c8c8999c98e946d6e8dd8293b5">
  
    
      
      <div class="view-content">
        
        <?php  foreach($service  as $services) {  ?>
         
          <div class="views-row">

<article class="moving-service featured-service">
  <a href="/service" aria-labelledby="card-title-1"></a>
  <div class="card card--circle-image">
    <div class="card-inner">
      <div class="card-content">

        <div class="circle-image">
          <img   src="<?php echo e($services->image); ?>" />
          
          
        </div>

        <h4 id="card-title-1">
            <div class="field field--name-field-serv-display-name field--type-string field--label-hidden field__item"> <?php echo e($services->title); ?> </div>
      </h4>

        
            <div class="clearfix text-formatted field field--name-field-serv-summary field--type-text-long field--label-hidden field__item">
            
            
            <?php echo $services->body; ?>

</div>
      

      </div>
    </div>
  </div>

</article></div>
   
   
   <?php   } ?>
   
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
  
          </div>
  </div>

        <div class="block" id="block--46">
          
            <div class="field field--name-field-block field--type-block-field field--label-hidden field__item"><div class="block tmt-map-home">
      <div class="layout-container"><div class="grid-container"><div class="column--two"><div class="card card--dark card--chevron card--form"><div class="card-inner"><div class="card-content"><h3>AP Movers And Cleaners</h3><a href="/contact-us" class="button--primary" id="location-search-button">Contact Us</a></div></div></div></div></div></div>
  </div>
</div>
      
      </div>

      
  <div class="panel background--black" id="panel--51">
          
            <div class="field field--name-field-panel-bg-image field--type-entity-reference field--label-hidden field__item"><div class="banner-image banner-background" style="background-image:url('<?php echo e($logo->image); ?>');">
</div></div>
      
        <div class="layout-container">
                        <h2>
            <div class="field field--name-field-panel-header field--type-string field--label-hidden field__item">Why AP Movers And Cleaners?</div>
      </h2>
                
            <div class="clearfix text-formatted field field--name-field-panel-body field--type-text-long field--label-hidden field__item"><p>Customer Oriented Services, Great reputation, Affordable ,Professional &amp;  Efficient.</p>
</div>
      
      <div class="field field--name-field-panel-columns field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">  <div class="columns-3" id="columns-3--50">
          
      <div class="field field--name-field-column-3-content field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">  <div class="card card--statistic" id="card-with-statistic--47">
          <div class="card-inner">
        <div class="card-content">
          <div class="circle-image stat">
            
            <div class="field field--name-field-card-statistic field--type-string field--label-hidden field__item">96%</div>
      
          </div>
                      <h4>
            <div class="field field--name-field-card-title field--type-string field--label-hidden field__item">Great Reputation</div>
      </h4>
                    
            <div class="field field--name-field-card-text field--type-string field--label-hidden field__item">Our customers are so happy.</div>
      
          
      
        </div>
      </div>
      </div>
</div>
              <div class="field__item">  <div class="card card--statistic" id="card-with-statistic--48">
          <div class="card-inner">
        <div class="card-content">
          <div class="circle-image stat">
            
            <div class="field field--name-field-card-statistic field--type-string field--label-hidden field__item">100%</div>
      
          </div>
                      <h4>
            <div class="field field--name-field-card-title field--type-string field--label-hidden field__item">Affordable</div>
      </h4>
                    
            <div class="field field--name-field-card-text field--type-string field--label-hidden field__item">AP Movers And Cleaners</div>
      
          
      
        </div>
      </div>
      </div>
</div>
              <div class="field__item">  <div class="card card--statistic" id="card-with-statistic--49">
          <div class="card-inner">
        <div class="card-content">
          <div class="circle-image stat">
            
            <div class="field field--name-field-card-statistic field--type-string field--label-hidden field__item">100%</div>
      
          </div>
                      <h4>
            <div class="field field--name-field-card-title field--type-string field--label-hidden field__item">Professional &amp;   Efficient</div>
      </h4>
                    
            <div class="field field--name-field-card-text field--type-string field--label-hidden field__item">AP Movers And Cleaners</div>
      
         
      
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

  </div>

  </div>

</article>

  </div>

  </div>

      </div>
      
      
    </div>

  </main>

  
     
     
     
     
      <div class="review-accolades">
      <div class="review-accolades__inner">
          <div class="region region-review-accolades">
    <div id="block-randomlocationreview" class="block tmt-bazaarvoice-location-random">
  
    
   
  </div>
<div id="block-accolades" class="block tmt-accolades">
  
    
      <div class="location-block" data-content="tmt_accolades"><div class="views-element-container"><div class="view view-accolades view-id-accolades view-display-id-corporate js-view-dom-id-f7f4e7ae223476af5c2d3b4d8e20c681cb3cf9e9c3cb42e75b1758ac74eb268e">
  
    
      
      <div class="view-content slick-initialized slick-slider">
          <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
          
          
   
 
   
   

   </div></div>
    
    
    
    
    

    </div>
  
          </div>
</div>
</div>
  </div>

  </div>

      </div>
    </div>
    
  
    
  
      <div id="cta" class="cta">
      <div class="layout-container">
          <div class="region region-cta">
    <div id="block-footercta" class="block tmt-location-footer-cta">
  
    
      <div class="location-block" data-content="tmt_location_footer_cta"><h3></h3>
<div class="button-group">
  
<a href="tel:<?php echo e($contact->phone1); ?>" data-organic="<?php echo e($contact->phone1); ?>" data-metro="<?php echo e($contact->phone1); ?>" data-display="<?php echo e($contact->phone1); ?>" data-paid="<?php echo e($contact->phone1); ?>" class="phone button button--secondary">Call <span class="number">  <?php echo e($contact->phone1); ?> </span></a>

	<a   class="button button--secondary button--separator" href="tel:<?php echo e($contact->phone2); ?>" ><span class="or">or </span><?php echo e($contact->phone2); ?> </a>
</div>
</div>
  </div>

  </div>

      </div>
    </div>
    
    
    <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/ay_website/resources/views/home.blade.php ENDPATH**/ ?>