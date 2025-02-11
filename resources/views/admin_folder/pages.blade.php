
         @extends('admin_folder/index')
@section('content')
         
         <?php 
use App\page;


$page = page::get();

?>
         
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Pages</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                         
                         
                          
                         <a  href="/pages/create"   class="btn btn-primary"  >  Add Page  </a> 
                          
                      </div>
                </div>
                <br>
                
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        
                     
                         
                        <th>Published</th>
                       
                        <th></th>
                        <th></th>
                      </tr>
                      
                      
                      <?php   foreach( $page as $pages){   ?>
                      
                      <tr  id="each{{$pages->id}}">
                        <td> {{ $pages->title }}</td>
                        
                        
                        <td style="">  <a  target="new"  href="/page/{{ $pages->id }}/{{ $pages->title }}" class="btn btn-default">   View </a>   </td>
                        
                        
                        <td>
                        <?php   if($pages->publish =='yes') {  ?>
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <?php  } else{  ?>
                        
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                      <?php  } ?>
                        
                        </td>
                        
                        
                        <td><a class="btn btn-default" href="pages/{{  $pages->id }}/edit">Edit</a>  </td>
                        
                        <td>
                        <form  id="form_id{{$pages->id}}"  onSubmit="send_landing_page(event,'pages/{{ $pages->id }}', 'form_id{{$pages->id}}','each{{$pages->id}}','loadingt{{ $pages->id }}')"  method="post"  action="pages/{{ $pages->id }}"   style="display: inline"> 
                          
                          {{ csrf_field() }}
                          
                        
          <input    name="_method"    value="delete"   type="hidden" />
                          
                          
                          
                          <input  id="loadingt{{ $pages->id }}"  type="submit"   class="btn btn-danger"  value="Delete"   />
                          
                          
                          
                         
                         
                           
                             </form>
                           
                           
                           
                          </td>
                      </tr>
                      
                    <?php    } ?>
                    
                    </table>
              </div>
              </div>

          </div>
        

@endsection






