<?php

namespace App\Http\Controllers\Back;

use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs=Faq::get();
        return view('back.faq.faq',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create_page(){
         return view('back.faq.add');
     }

    public function create(Request $request)
    {
        $request->validate([
            'sual_az'=>'required',
            'sual_en'=>'required',
            'sual_ru'=>'required',
            'cavab_az'=>'required',
            'cavab_en'=>'required',
            'cavab_ru'=>'required',
        ]);
        Faq::insert([
            'sual_az'=>$request->sual_az,
            'sual_en'=>$request->sual_en,
            'sual_ru'=>$request->sual_ru,
            'cavab_az'=>$request->cavab_az,
            'cavab_en'=>$request->cavab_en,
            'cavab_ru'=>$request->cavab_ru,
        ]);
        toastr()->success('Faq Yaradildi');

        return redirect()->route('faq.add.page');
      

    }

    public function update_page($id){

        $faqs=Faq::where('id',$id)->first();
        return view('back.faq.faq_edit',compact('faqs'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFaqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    // public function edit(Faq $faq)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqRequest  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        // dd('salam');
        // $faq_id = $request->id;

        $request->validate([
            'sual_az'=>'nullable',
            'sual_en'=>'nullable',
            'sual_ru'=>'nullable',
            'cavab_az'=>'nullable',
            'cavab_en'=>'nullable',
            'cavab_ru'=>'nullable',
        ]);

        $faq = Faq::find($id);

        $faq->sual_az = $request->sual_az;
        $faq->sual_en = $request->sual_en;
        $faq->sual_ru = $request->sual_ru;
        $faq->cavab_az = $request->cavab_az;
        $faq->cavab_en = $request->cavab_en;
        $faq->cavab_ru = $request->cavab_ru;
        
        $faq->save();
        toastr()->success('Ugurla Deyisdirildi');
        return redirect()->route('faq.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Faq::findOrFail($id)->delete();
       toastr()->success('Ugurla Silindi');
       return redirect()->back();
        
       
    }
}
