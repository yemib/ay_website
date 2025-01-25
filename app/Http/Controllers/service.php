<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\servicess;


class service extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
		 public function __construct()
    {
        $this->middleware('article');

       
    }
	
    public function index()
    {
        // main display  
		
		return view('admin_folder/services');
		
		
		
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
			return view('admin_folder/add_services');
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		
		$service  = new servicess();
		
		$service->title  = $request->title;
		$service->body  = $request->body;
		$service->publish  =(isset($request->publish) ) ?  $request->publish  :  'no' ;
		
		
		
		if($request->image  != ''){  
			
			$image = $request->file('picture');
			$getsize =  $image->getSize();
	$original_name =$image->getClientOriginalName();
	$new_name = rand() . '.' . $image->getClientOriginalExtension();
	$real_path  =   $image->getRealPath();
	$image->move(public_path('picture_servic'), $new_name);
			
			$service->image  =	'/picture_servic/'.$new_name;
		
		}else{
			
		$service->image  =	'  ' ;
		}
		
		
		
		
		
	
		
		
		
		
		$service->save();
		
		
		return  redirect('/services');
		
		
		

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$all = array('edit'=> 'edit'  , 'id'=> $id);
		
			return view('admin_folder/add_services')->with($all);
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		
		
		$service  = servicess::find($id);
		
		$service->title  = $request->title;
		$service->body  = $request->body;
		$service->publish  =(isset($request->publish) ) ?  $request->publish  :  'no' ;
		
				if($request->image  != ''){  
			
			$image = $request->file('picture');
			$getsize =  $image->getSize();
	$original_name =$image->getClientOriginalName();
	$new_name = rand() . '.' . $image->getClientOriginalExtension();
	$real_path  =   $image->getRealPath();
	$image->move(public_path('picture_servic'), $new_name);
			
			$service->image  =	'/picture_servic/'.$new_name;
		
		}else{
			
	
		}
		
		
		
		$service->save();
		
		
		return  redirect('/services');
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		
		$service  = servicess::find($id);
		$service->delete();
		
		return   redirect('/services');
		
		
    }
}
