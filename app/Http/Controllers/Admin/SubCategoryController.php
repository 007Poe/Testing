<?php

namespace App\Http\Controllers\Admin;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $sub_categories= SubCategory::all(); 
        return view('Admin.sub_category.view',compact('sub_categories'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('Admin.sub_category.insert');
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
    		'category_id' => 'required',
    		'category_name' => 'required',
    		'specific_label.*' => 'required_unless:type_of_content,is_information',
    		'specific_value.*' => 'required_unless:type_of_content,is_information'
    	]);

    	//dd($request->all());

    	$specification = implode('&/', $request->specific_label).'&&'.implode('&/', $request->specific_value);

    	$category = new SubCategory;
    	$category->category_id=$request->category_id;
    	$category->name=$request->category_name;
    	$category->specification=$specification;		
    	$category->save();

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
        $sub_category= SubCategory::find($id);
        return view('Admin.sub_category.show',compact('sub_category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$subcategory= SubCategory::find($id);
        return view('Admin.sub_category.edit',compact('subcategory'));
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
        $this->validate($request,[
            'category_id' => 'required',
            'name' => 'required',
            'specific_label.*' => 'required_unless:type_of_content,is_information',
            'specific_value.*' => 'required_unless:type_of_content,is_information'
        ]);

        $specification = implode('&/', $request->specific_label).'&&'.implode('&/', $request->specific_value);

        $request['specification'] = $specification;
        $subcategory = SubCategory::find($id);
        if($subcategory->update($request->all())){
        	return redirect('/sub_category');
        }

        return redirect('/sub_category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $sub_category)
    {
        $sub_category->delete();
        return redirect('/sub_category');
    }
}
