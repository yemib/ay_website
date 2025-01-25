
         @extends('admin_folder/index')
@section('content')
         
         <?php 
use App\servicess;


$service = servicess::get();

?>
         
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Services</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                         
                         
                          
                         <a  href="/services/create"   class="btn btn-primary"  >  Add Service  </a> 
                          
                      </div>
                </div>
                <br>
                
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Body</th>
                         <th>Featured Image </th>
                        <th>Published</th>
                       
                        <th></th>
                        <th></th>
                      </tr>
                      
                      
                      <?php   foreach( $service as $services){   ?>
                      
                      <tr  id="each{{$services->id}}">
                        <td> {{ $services->title }}</td>
                        
                        
                        <td style=""> <div   style="height: 80px  ; overflow: auto ; background: #FF84C1">  {!! $services->body !!} </div>  </td>
                        
                      
                        <td> @if($services->image !='  ') <img  height="50"   width="50"   src="{{ $services->image }}"   />  @endif     </td>
                        
                          
                        <td>
                        <?php   if($services->publish =='yes') {  ?>
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <?php  } else{  ?>
                        
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                      <?php  } ?>
                        
                        </td>
                        
                        
                        <td><a class="btn btn-default" href="services/{{  $services->id }}/edit">Edit</a>  </td>
                        
                        <td>
                        <form  id="form_id{{$services->id}}"  onSubmit="send_landing_page(event,'services/{{ $services->id }}', 'form_id{{$services->id}}','each{{$services->id}}','loadingt{{ $services->id }}')"  method="post"  action="services/{{ $services->id }}"   style="display: inline"> 
                          
                          {{ csrf_field() }}
                          
                        
          <input    name="_method"    value="delete"   type="hidden" />
                          
                          
                          
                          <input  id="loadingt{{ $services->id }}"  type="submit"   class="btn btn-danger"  value="Delete"   />
                          
                          
                          
                         
                         
                           
                             </form>
                           
                           
                           
                          </td>
                      </tr>
                      
                    <?php    } ?>
                    
                    </table>
              </div>
              </div>

          </div>
        

@endsection






