<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function link()
    {
        $id=session('userid');
        if(DB::table('links')->where('user_id', $id)->exists())
         {
           session()->flash('profile','You Already Upload it , Now you can Update it ');
           return redirect('/profile');
  
         }
         else{
           
  
           return view('admin.links');
         }
        
    }

    public function postlink(Request $req)
    {
        $facebook=$req->input('facebook');
       
        $github=$req->input('github');
        $linkedin=$req->input('linkedin');
        $twitter=$req->input('twitter');
        if(empty($twitter))
        {
            $twitter="#";
        }
        if(empty($facebook))
        {
            $facebook="#";
        }
        
        $user_id = session('userid');
        
        DB::table('links')->insert([
            'facebook'=> $facebook,
            'github'=> $github,
            'linkedin'=> $linkedin,
            'twitter'=> $twitter,
           
            'user_id'=> $user_id,
            

        ]);
        return redirect('/profile');
    }


    public function edit_link($id)
    {
        $links = DB::table('links')->where('id', $id)->get();
        return view('edit.links',['links'=>$links]);
    }


    public function edit_postlink(Request $req,$id)
    {
        $user_id = session('userid');
        $facebook=$req->input('facebook');
       
        $github=$req->input('github');
        $linkedin=$req->input('linkedin');
        $twitter=$req->input('twitter');
        DB::table('links')->where('id', $id)->update([
            'facebook'=> $facebook,
            'github'=> $github,
            'linkedin'=> $linkedin,
            'twitter'=> $twitter,
           
            'user_id'=> $user_id,
            

        ]);
        return redirect('/profile');
       
    }
}
