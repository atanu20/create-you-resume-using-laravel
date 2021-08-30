<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EducationController extends Controller
{
    public function education()
    {
        return view('admin.education');
       }
      
   
       public function postedu(Request $req)
       {
           $work=ucfirst($req->input('degree'));
           $company=$req->input('institute');
           $sdate=$req->input('sdate');
           $edate=$req->input('edate');
           $desc=$req->input('desc');
           $user_id = session('userid');
   
           DB::table('education')->insert([
               'degree'=> $work,
               'institute'=> $company,
               'sdate'=> $sdate,
               'edate'=> $edate,
               'desc'=> $desc,
               'user_id'=> $user_id,
               
   
           ]);
           return redirect('/profile');
   
   
   
           
       }
   
       public function edit_edu($id)
       {
        $education = DB::table('education')->where('id', $id)->get();
        return view('edit.education',['edus'=>$education]);
          
       }
   
       public function edit_postedu(Request $req,$id)
       {
        $work=ucfirst($req->input('degree'));
        $company=$req->input('institute');
        $sdate=$req->input('sdate');
        $edate=$req->input('edate');
        $desc=$req->input('desc');
        $user_id = session('userid');

         DB::table('education')->where('id', $id)->update([
               'degree'=> $work,
               'institute'=> $company,
               'sdate'=> $sdate,
               'edate'=> $edate,
               'desc'=> $desc,
               'user_id'=> $user_id,
               
   
           ]);
           return redirect('/profile');
       }
   
       public function delete_postedu($id)
       {
        DB::table('education')->where('id', $id)->delete();
       
        return redirect('/profile');
       }
}
