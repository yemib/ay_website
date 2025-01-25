<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
//use App\database_my;
use Illuminate\Support\Facades\Input;

use App\admins;





Route::get('/',  function(){
	 return  view('home');
	
});



Route::post('/sendmail',  function(){
	
	
// send email
	
	
	
});






Route::post('/logins',  function(Request $request){
	
	  $checking = 	admins::where('username'  , $request->username )->where('password' ,   $request->password)->first();
	
if(isset($checking->id)   ){
			
//set the session  ok		
	$request->session()->put('admin'  ,  $request->username );
	
			 return redirect('/admins');
		}else{
	
	$error ='wrong password or email address';
	 return redirect('/admin_signin')->with('error' , $error);
}
		
		
		

	
	
	
	
	
});



Route::get('page/{id}/{name}',  function($id , $name){
	
	
	$all = array('id'=>$id  , 'name'=>$name);
	 return  view('about')->with($all);
	
});


Route::get('/service',  function(){
	 return  view('services');
	
});


Route::get('/consumer-protection',  function(){
	 return  view('consumer-protection');
	
});

Route::get('/survey',  function(){
	 return  view('survey');
	
});



Route::get('/contact-us',  function(){
	 return  view('contact-us');
	
});



Route::get('/blog',  function(){
	 return  view('blog');
	
});



Route::get('/location',  function(){
	 return  view('location');
	
});





Route::get('/admins',  function(){
	
	 return  view('admin_folder/home');
	
})->middleware('article');




Route::get('/edit',  function(){
	
	 return  view('admin_folder/edit');
	
});



Route::resources([
    'services' => 'service',
    'post' => 'post',
    'pages' => 'pages',
    'slidder' => 'slidder',
    'users' => 'users',
    'contact' => 'contact',
    'logo' => 'logo',
   
   
	
   
]);




Route::get('/admin_signin' , function(){
	
	return view('admin_folder/login');
	
});


Route::get('/logout' , function(Request $request){
	
	// logout
	$request->session()->forget('admin');
	
	
	return view('admin_folder/login');
	
	
	
});


