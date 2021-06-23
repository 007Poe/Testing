<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\Controller;
use Session;
use File;

class ProductController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request,Product $product)
    {

        // $image = $request->file('product_image');

        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        // $destinationPath = public_path('/img/product_images');

        // $image->move($destinationPath, $input['imagename']);

        $data = $request['product_image'];

        list($type,$data) = explode(';', $data);

        list( , $data) = explode(',', $data);

        $data = base64_decode($data);

        $imgName = time().'.png';

        $path = public_path('/img/product_images/');

        if(!File::isDirectory($path)){
        	File::makeDirectory($path, 0777, true, true);
    	}

        file_put_contents($path . $imgName, $data);


        $specification = implode('&/', $request->specific_label).'&&'.implode('&/', $request->specific_value);

        $request['image']=$imgName;
        $request['specification']=$specification;
        $request['sale_qty']=0;
        $request['status']="active";

        $product->create($request->all());

        return back();
    }
    
    /**
     * Display the all resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $products = Product::latest()->get();
        return view('Admin.product.view',compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //$product= Product::find($id);
        //dd($product);
        return view('Admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request,Product $product)
    {

        if (!is_null($request['product_image']))
        {
            $data = $request['product_image'];

            list($type,$data) = explode(';', $data);

            list( , $data) = explode(',', $data);

            $data = base64_decode($data);

            $request['image'] = time().'.png';

            $path = public_path('/img/product_images/');

            file_put_contents($path . $request['image'], $data);
                       
        } 

        $specification = implode('&/', $request->specific_label).'&&'.implode('&/', $request->specific_value);

        $request['specification']=$specification;
        $request['sale_qty']=0;
        $request['status']="active";

        //dd($request->all());

        $product->update($request->all());

        return redirect('/view_product');
    }

    public function category_specifications(Request $request,$id)
    {

    	$category = SubCategory::find($id);

    	$specification = explode('&&', $category->specification);
    	$specific_label = explode('&/', $specification[0]);
    	$specific_value = explode('&/', $specification[1]);
    	return response()->json(['specific_label'=>$specific_label,'specific_value'=>$specific_value]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/view_product');
    }
}
