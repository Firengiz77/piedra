<?php

namespace App\Http\Controllers\Back;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::get();
       return view('back.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'catalog_id'=>'required',
            'name_az'=>'required',
            'name_en'=>'required',
            'name_ru'=>'required',

            'details_az'=>'required',
            'details_en'=>'required',
            'details_ru'=>'required',

            'shipping_az'=>'required',
            'shipping_en'=>'required',
            'shipping_ru'=>'required',

            'price'=>'required',
            'discount'=>'nullable',
            'count'=>'required',

            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
         
        ]);

        // $path = $request->file('thumbnail')->store('public/upload/product_images');

     

        if($request->hasfile('images'))
        {
           foreach($request->file('images') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path('/upload/product_images'), $name);  
               $data[] = $name;  
           }
        }


        $products = new Product;


        $products->catalog_id = $request->catalog_id;

        $products->name_az = $request->name_az;
        $products->name_en = $request->name_en;
        $products->name_ru = $request->name_ru;
        
        $products->details_az = $request->details_az;
        $products->details_en = $request->details_en;
        $products->details_ru = $request->details_ru;
        
        $products->shipping_az = $request->shipping_az;
        $products->shipping_en = $request->shipping_en;
        $products->shipping_ru = $request->shipping_ru;
        
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->count = $request->count;
        
        $file = $request->file('thumbnail');
        @unlink(public_path('/upload/product_images/').$products->thumbnail);
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('/upload/product_images'),$filename);
        $products['thumbnail'] = $filename;

       
        $products->images=json_encode($data);
        $products->save();
     
        toastr()->success('Product created successfully');
        return redirect()->route('product.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('back.product.add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::where('id',$id)->first();
      return view('back.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'catalog_id'=>'nullable',
            'name_az'=>'nullable',
            'name_en'=>'nullable',
            'name_ru'=>'nullable',

            'details_az'=>'nullable',
            'details_en'=>'nullable',
            'details_ru'=>'nullable',

            'shipping_az'=>'nullable',
            'shipping_en'=>'nullable',
            'shipping_ru'=>'nullable',

            'price'=>'nullable',
            'discount'=>'nullable',
            'count'=>'nullable',

            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

            'images' => 'nullable',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
        ]);

    //    if($request->hasfile('images'))
    //     {
    //        foreach($request->file('images') as $image)
    //        {
    //            $name=$image->getClientOriginalName();
    //            $image->move(public_path('/upload/product_images'), $name);  
    //            $data[] = $name;  
    //        }
    //     }



        $products = Product::find($id);

        $products->name_az = $request->name_az;
        $products->name_en = $request->name_en;
        $products->name_ru = $request->name_ru;
        
        $products->details_az = $request->details_az;
        $products->details_en = $request->details_en;
        $products->details_ru = $request->details_ru;
        
        $products->shipping_az = $request->shipping_az;
        $products->shipping_en = $request->shipping_en;
        $products->shipping_ru = $request->shipping_ru;
        
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->count = $request->count;

    
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            @unlink(public_path('/upload/product_images/').$products->thumbnail);
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/product_images'),$filename);
            $products['thumbnail'] = $filename;
        }

    //    $products->images=json_encode($data);
            $images=array();
           if($files=$request->file('images')){
           foreach($files as $file2){
            $name=$file2->getClientOriginalName();
            $file2->move('image',$name);
            $images[]=$name;
        }
        $products['images'] = $images;


    }
    /*Insert your data*/

  
 
        
        $products->save();

        toastr()->success('Product Edited Successfully');
        return redirect()->route('product.index');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        Product::findOrFail($id)->delete();
        toastr()->success('Product deleted successfully');
        return redirect()->back();
    }
}
