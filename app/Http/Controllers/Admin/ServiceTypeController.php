<?php

namespace App\Http\Controllers\Admin;

use App\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class ServiceTypeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
     	$servicetypes=ServiceType::all(); 
     	return view('Admin.service_type.index',compact('servicetypes'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('Admin.service_type.insert');
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
    		'service_type_name' => 'required',
    		'description' => 'required',
            'image' => 'required'
        ]);

        $data = $request['image'];

        list($type,$data) = explode(';', $data);

        list( , $data) = explode(',', $data);

        $data = base64_decode($data);

        $imgName = time().'.png';

        $path = public_path('/img/servicetypes_gallery_images/');

        if(!File::isDirectory($path)){
        	File::makeDirectory($path, 0777, true, true);
    	}

        file_put_contents($path . $imgName, $data);

        $service_type = new ServiceType;
        $service_type->type=$request->service_type_name;
        $service_type->description=$request->description;
        $service_type->image=$imgName;		
        $service_type->save();

        return back();
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
    public function edit(ServiceType $servicetype)
    {
        return view('Admin.service_type.edit',compact('servicetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceType $servicetype)
    {
        $this->validate($request,[
            'type' => 'required',
            'description' => 'required'
        ]);

        if (!is_null($request['service_type_image']))
        {
            $data = $request['service_type_image'];

            list($type,$data) = explode(';', $data);

            list( , $data) = explode(',', $data);

            $data = base64_decode($data);

            $request['image'] = time().'.png';

            $path = public_path('/img/servicetypes_gallery_images/');

            if(!File::isDirectory($path)){
            	File::makeDirectory($path, 0777, true, true);
            }

            file_put_contents($path . $request['image'], $data);
                       
        } 

        $servicetype->update($request->all());

        return redirect('/view_service_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceType $servicetype)
    {
        $servicetype->delete();
        return redirect('/view_service_type');
    }
}
