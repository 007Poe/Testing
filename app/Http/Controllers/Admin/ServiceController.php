<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class ServiceController extends Controller
{ 
	/**
     * Display the resources.
     *
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $services=Service::all();
        return view('Admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$service_types = ServiceType::all();
    	return view('Admin.service.insert', compact('service_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'service_type_id' => 'required',
    		'image' => 'required',
    		'description' => 'required'
    	]);

        $data = $request['image'];

        list($type,$data) = explode(';', $data);

        list( , $data) = explode(',', $data);

        $data = base64_decode($data);

        $imgName = time().'.png';

        $path = public_path('/img/service_images/');

        if(!File::isDirectory($path)){
        	File::makeDirectory($path, 0777, true, true);
    	}

        file_put_contents($path . $imgName, $data);
        
        $service = new Service;
        $service->name=$request->name;
        $service->service_type_id=$request->service_type_id;
        $service->image=$imgName;
        $service->description=$request->description;		
        $service->save();

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('Admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request,[
            'name' => 'required',
            'service_type_id' => 'required',
            'description' => 'required'
        ]);

        if (!is_null($request['service_image']))
        {
            $data = $request['service_image'];

            list($type,$data) = explode(';', $data);

            list( , $data) = explode(',', $data);

            $data = base64_decode($data);

            $request['image'] = time().'.png';

            $path = public_path('/img/service_images/');

            if(!File::isDirectory($path)){
            	File::makeDirectory($path, 0777, true, true);
            }

            file_put_contents($path . $request['image'], $data);
                       
        } 

        $service->update($request->all());

        return redirect('/view_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/view_service');
    }
}
