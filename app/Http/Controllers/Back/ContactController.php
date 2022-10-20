<?php

namespace App\Http\Controllers\Back;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::get();
       return view('back.contact.contact',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $request->validate([
           'phone'=>'required',
           'email'=>'required',
           'address'=>'required'
       ]);
       Contact::insert([
           'phone'=>$request->phone,
           'email'=>$request->email,
           'address'=>$request->address
       ]);
       toastr()->success('Elaqe Melumatlari ugurla Elave olundu');
       return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $contact = Contact::where('id',$id)->first();
      return view('back.contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'phone'=>'nullable',
            'email'=>'nullable',
            'address'=>'nullable',
          
        ]);

        $contact = Contact::find($id);

        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
     
        $contact->save();

        toastr()->success('Ugurla Deyisdirildi');
        return redirect()->route('contact.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Contact::findOrFail($id)->delete();
       toastr()->success('Melumat ugurla Silindi');
       return redirect()->back();
    }
}
