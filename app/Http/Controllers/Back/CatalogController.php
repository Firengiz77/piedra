<?php

namespace App\Http\Controllers\Back;

use App\Models\Catalog;
use App\Http\Requests\StoreCatalogRequest;
use App\Http\Requests\UpdateCatalogRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::get();
        
        return view('back.catalog.catalog',compact('catalogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     

    public function create(Request $request)
    {
        $request->validate([
            'name_az'=>'required',
            'name_en'=>'required',
            'name_ru'=>'required',
            'parent_id'=>'nullable',
       
        ]);

        Catalog::insert([
            'name_az'=>$request->name_az,
            'name_en'=>$request->name_en,
            'name_ru'=>$request->name_ru,
            'parent_id'=>$request->parent_id,
       
        ]);

        toastr()->success('Catalog Elave edildi');
        return redirect()->route('catalog.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatalogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatalogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       return view('back.catalog.add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
      $catalog = Catalog::where('id',$id)->first();
      return view('back.catalog.edit',compact('catalog'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatalogRequest  $request
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $request->validate([
            'name_az'=>'nullable',
            'name_en'=>'nullable',
            'name_ru'=>'nullable',
            'parent_id'=>'nullable',
        ]);

    
        $catalog = Catalog::find($id);

        $catalog->name_az = $request->name_az;
        $catalog->name_en = $request->name_en;
        $catalog->name_ru = $request->name_ru;
        $catalog->parent_id = $request->parent_id;

    
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('/upload/catalog_images/').$catalog->image);
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/catalog_images'),$filename);
            $catalog['image'] = $filename;
        }
    
      
 

        
        $catalog->save();

        toastr()->success('Catalog Ugurla Deyisdirildi');
        return redirect()->route('catalog.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
       Catalog::findOrFail($id)->delete();
       toastr()->success('Catalog ugurla Silindi');
       return redirect()->back();
    }
}
