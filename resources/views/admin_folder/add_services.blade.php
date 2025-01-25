 @extends('admin_folder/index')
         @section('content')
         
         <?php 
use App\servicess;

if(isset($edit)){
	
	  $service =  servicess::find($id);
	
}

?>
         
         
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Add Services</h3>
              </div>
              <div class="panel-body">
               
               <a   class="btn btn-primary" href="/services">  Services List     </a>
                <form  method="post" action="@if(isset($service)) /services/{{ $service->id }}  @else /services @endif"  enctype="multipart/form-data"   >
                 
                  {{ csrf_field() }}
              
                  <div class="form-group">
                    <label>Service Title</label>
                    <input   type="text" class="form-control" placeholder="Service Title" value="@if(isset($service)) {{$service->title}} @endif"   name="title" >
                  </div>
                  <div class="form-group">
                    <label>Service Body</label>
                    <textarea name="body" class="form-control" placeholder="Service Body">@if(isset($service)) {{ $service->body  }}  @endif
                    </textarea>
                  </div>
                
                  
                  
                 
                  <div class="form-group">
                   
                   <div   id="preview" @if(isset($service)) style="background-image: url({{ $service->image }}); height: 200px"  @endif >       </div>
                   
                   
                   <input  id="pre_input"     type="hidden"   name="image"    />
                   
                   
                    <label  class="btn btn-primary"  for="file-input">Upload Featured  Image</label>
                   
                   
                     
                  <div class="checkbox">
                   
                    <?php  if(isset($service)) { ?>
              
                    <label>
                    
                      <input  name="publish"   value="yes"  @if($service->publish  =='yes')  checked @endif  type="checkbox"> Published
                    </label>
                     
                     
                     <?php   } else{   ?>
                     
                    <label><input  name="publish"   value="yes"    type="checkbox" checked> Published</label>
                    
                    <?php   } ?>
                  </div>
                   
                   <input       type="file"   style="display: none"   id="file-input"   name="picture" >
                  </div>
                  
                  
                       <?php  if(isset($service)) { ?>
                              
                              <input    type="hidden"     name="_method"   value="PUT"/>
                              
                               <input type="submit" class="btn btn-default" value="Update">
                               
                               
                               
                       
                       <?php  }else{    ?>
                  
                  <input type="submit" class="btn btn-default" value="Submit">
                  
                  
                  <input type="reset" class="btn btn-danger" value="Reset"    onClick="$('#preview').hide()">
                  
                  
                  <?php    } ?>
                  
                </form>
              </div>
              </div>

          </div>
       @endsection
    