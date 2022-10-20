<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BackController extends Controller
{
  
    public function admin_index(){
       
        return view('back.pages.index');
    }
    public function admin_login_page(){
        return view('back.pages.login');
    }
    public function admin_register_page(){
        return view('back.pages.register');
    }

    public function admin_register(Request $request){
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin_active'=> 1,
            'created_at' => Carbon::now(),
            ]);    
        return redirect()->route('admin.index');
   
    }
    public function admin_login(Request $request){
    
            //   dd($request->all());
             $request->validate([
                    'email'=>'required',
                    'password' => 'required',
        
                ]);
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
             {
                toastr()->success('Giris Edildi');
                return redirect()->route('admin.index');
             }
             else{
                toastr()->error('Parametrleri duzgun yoxlayin');
             return redirect()->back();
             }

            } 

    
            public function all_admin(){
        $admins=User::where('admin_active',1)->get();
        return view('back.pages.all_admin',compact('admins'));
    }
    public function admin_delete($id){
        User::find($id)->delete();
        toastr()->success('Admin Silindi');
        return redirect()->back();
    }

    public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.page');
    }
     public function admin_edit_page($id){

         $admin=User::where('id',$id)->first();

     return view('back.pages.edit_page',compact('admin'));
    }

    public function admin_edit_all(Request $request){
        $id=auth()->guard('admin')->id();
        $data = User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;

      if($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('/upload/admin_images/').$data->image);
          $filename = date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('/upload/admin_images'),$filename);
          $data['image'] = $filename;
      }
      
          $data->save();
          toastr()->success('Parametrler ugurla deyisdirildi');
          return redirect()->back();

    }

    public function admin_edit_password(Request $request){

        $id=auth()->guard('admin')->id();
       
           $hashedpassword = User::find($id)->password;

           if(Hash::check($request->oldpassword,$hashedpassword)){
               $admin = User::find($id);
               $admin->password = Hash::make($request->password);
               $admin->save();
               Auth::logout();
               toastr()->success('Sifre ugurla deyisdirildi');
               return redirect()->route('admin.login.page');
           }
           else{
            toastr()->error('Something went wrong');
               return redirect()->back();
           }
    }





}
