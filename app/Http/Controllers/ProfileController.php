<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function logindet()
    {
      $id=session('userid');
      $user = DB::table('user')->where('id', $id)->get();
       return view('admin.logindet',['users'=>$user]);
    }

    public function update_logindet(Request $req)
    {
      $name = $req->input('name');
      $email = $req->input('email');
      $password = $req->input('password');
      $id=session('userid');
      DB::table('user')->where('id',$id)->update([
         'name' => $name,
         'email' => $email,
         'password' => Hash::make($password)

     ]);
     return redirect('/profile');

       
    }

    public function profiledet()
    {
       $id=session('userid');
      if(DB::table('profile')->where('user_id', $id)->exists())
       {
         session()->flash('profile','You Already Upload it , Now you can Update it ');
         return redirect('/profile');

       }
       else{
         

         return view('admin.profiledet');
       }
    }

    public function update_profiledet(Request $req)
    {
      $title=$req->input('title');
      $profileimg=$req->file('profileimg');
      $age=$req->input('age');
      $phone=$req->input('phone');
      $address=$req->input('address');
      $aboutme=$req->input('aboutme');

      if($profileimg->getSize() > 3000000)
      {
         $req->session()->flash('error','File should be less then 3 MB');
         return redirect('/update_profile');

      }
      else{
         $filedata=$profileimg->getClientOriginalExtension();
 
         if($filedata=='jpg' or $filedata=='png' or $filedata=='jpeg')
         {
           $filename=time().'_'.$profileimg->getClientOriginalName();
           $da=$profileimg->move('img/upload/',$filename);

          if($da)
          {
            DB::table('profile')->insert([
               'title'=> $title,
               'profileimg'=> $filename,
               'age'=>$age,
               'phone'=>$phone,
               'address'=>$address,
               'aboutme'=>$aboutme,
               'user_id'=>session('userid')

           ]);
           return redirect('/profile');
          }

         }else{
            $req->session()->flash('error','Only jpg ,jpeg and png');
            return redirect('/update_profile');
   
         }

      }
      // $profileimg->getClientOriginalName()
      // dd();
       
    }

    public function edit_profiledet($id)
    {
      //  dd($id);
      $profile = DB::table('profile')->where('user_id', $id)->get();

       return view('edit.profiledet',['profile' => $profile]);
    }

    public function submit_updated_profiledet(Request $req,$id)
    {
      $title=$req->input('title');
      
      $age=$req->input('age');
      $phone=$req->input('phone');
      $address=$req->input('address');
      $aboutme=$req->input('aboutme');

      DB::table('profile')->where('user_id', $id)->update([
         'title'=> $title,
         
         'age'=>$age,
         'phone'=>$phone,
         'address'=>$address,
         'aboutme'=>$aboutme,
         'user_id'=>session('userid')

     ]);
     return redirect('/profile');

       return view('admin.profiledet');
    }

    

    

}
