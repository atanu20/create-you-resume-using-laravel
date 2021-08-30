<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function work()
    {
        return view('admin.works');
    }

    public function postwork(Request $req)
    {
        $work=ucfirst($req->input('work'));
        $company=$req->input('company');
        $sdate=$req->input('sdate');
        $edate=$req->input('edate');
        $desc=$req->input('desc');
        $user_id = session('userid');

        DB::table('works')->insert([
            'work'=> $work,
            'company'=> $company,
            'sdate'=> $sdate,
            'edate'=> $edate,
            'desc'=> $desc,
            'user_id'=> $user_id,
            

        ]);
        return redirect('/profile');



        
    }

    public function edit_work($id)
    {
        $works = DB::table('works')->where('id', $id)->get();
        return view('edit.works',['works'=>$works]);
        
    }

    public function edit_postwork(Request $req,$id)
    {
        $work=ucfirst($req->input('work'));
        $company=$req->input('company');
        $sdate=$req->input('sdate');
        $edate=$req->input('edate');
        $desc=$req->input('desc');
        $user_id = session('userid');

        DB::table('works')->where('id', $id)->update([
            'work'=> $work,
            'company'=> $company,
            'sdate'=> $sdate,
            'edate'=> $edate,
            'desc'=> $desc,
            'user_id'=> $user_id,
            

        ]);
        return redirect('/profile');
    }

    public function delete_postwork($id)
    {
        DB::table('works')->where('id', $id)->delete();
       
         return redirect('/profile');
    }
}
