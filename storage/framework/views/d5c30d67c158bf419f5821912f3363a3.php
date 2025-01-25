<!---thhe banner is here  ---->
  

<?php $__env->startSection('content'); ?>


<?php    


use App\servicess;

$service = servicess::where('publish' , 'yes')->get();


?>   

<div   class="container">






	
		<div  class="row">

			<?php   $count  = 1 ;   foreach($service  as $services)  {
			
			$value  = $count%2 ;
	
	
			if( $value  ==  0 ){ 
			
			
			?>
					
					
					 
					
					<div  class="col-sm-12"><h2>   <?php echo e($services->title); ?>    </h2> </div>	
						
						
		<div  class="col-sm-8"   style="">     <?php echo $services->body; ?>  </div>	
		
		
		<div  class="col-sm-4">  <img   src="<?php echo e($services->image); ?>"  />     </div>	
		
		<div  class="col-sm-12">  	<hr/> </div>
		
		
		
		
		
			
					<?php    
			}else{
				
				?>
				
				
		
					
					<div  class="col-sm-12"><h2>   <?php echo e($services->title); ?>    </h2> </div>	
						
						<div  class="col-sm-4">  <img   src="<?php echo e($services->image); ?>"  />     </div>	
		
						
						
		<div  class="col-sm-8"   style="">     <?php echo $services->body; ?>  </div>	
		
		
		
		<div  class="col-sm-12">  	<hr/> </div>
		
		
		
						
										
				
				<?php 
				
			}
				
				
				$count++ ; }?>
									
		</div>	
	
	
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/itwtech2/public_html/ay_website/resources/views/services.blade.php ENDPATH**/ ?>