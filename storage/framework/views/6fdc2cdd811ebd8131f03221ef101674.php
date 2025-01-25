<!---thhe banner is here  ---->
  

<?php $__env->startSection('content'); ?>

   <?php    
		  
		use App\page ;
		  
		  
		  $page = page::find($id);
		  
		  ?>


 

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
            <div class="field field--name-field-panel-header field--type-string field--label-hidden field__item"><?php echo e($page->title); ?> </div>
      </h2>
                
            <div class="clearfix text-formatted field field--name-field-panel-body field--type-text-long field--label-hidden field__item">
</div>
      
      <div class="field field--name-field-panel-columns field--type-entity-reference-revisions field--label-hidden field__items">
              <div class="field__item">  <div class="columns-1" id="columns-1--44">
          
            <div class="field field--name-field-column-1-content field--type-entity-reference-revisions field--label-hidden field__item">  <div class="block" id="block--43">
          
            <div class="field field--name-field-block field--type-block-field field--label-hidden field__item"><div class="block views-block-tmt-moving-services-block-1">
  
    
      <div class="views-element-container"><div class="view view-tmt-moving-services view-id-tmt_moving_services view-display-id-block_1 js-view-dom-id-ae1fdad04638fc24d02780ce43f0411061f167c8c8999c98e946d6e8dd8293b5">
  
    
    
 
      
      <div class="view-content">
<?php echo $page->body; ?>

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
          
            <div class="field field--name-field-panel-bg-image field--type-entity-reference field--label-hidden field__item"><div class="banner-image banner-background" style="background-image:url('<?php echo e(asset('img/logo.jpg')); ?>');">
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

  
     
     


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/ay_website/resources/views/about.blade.php ENDPATH**/ ?>