<!---thhe banner is here  ---->
  @extends('layouts.index')

@section('content')


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
					
					
					 
					
					<div  class="col-sm-12"><h2>   {{  $services->title }}    </h2> </div>	
						
						
		<div  class="col-sm-8"   style="">     {!!  $services->body  !!}  </div>	
		
		
		<div  class="col-sm-4">  <img   src="{{ $services->image }}"  />     </div>	
		
		<div  class="col-sm-12">  	<hr/> </div>
		
		
		
		
		
			
					<?php    
			}else{
				
				?>
				
				
		
					
					<div  class="col-sm-12"><h2>   {{  $services->title }}    </h2> </div>	
						
						<div  class="col-sm-4">  <img   src="{{ $services->image }}"  />     </div>	
		
						
						
		<div  class="col-sm-8"   style="">     {!!  $services->body  !!}  </div>	
		
		
		
		<div  class="col-sm-12">  	<hr/> </div>
		
		
		
						
										
				
				<?php 
				
			}
				
				
				$count++ ; }?>
									
		</div>	
	
	
</div>




@endsection