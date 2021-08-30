<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SkilController extends Controller
{
    public function skil()
    {
        return view('admin.skils');
       }
 public function postskil(Request $req)
    {
        // strtolower
        
        $skil=ucfirst($req->input('skil'));
        $percentage=$req->input('percentage');
        $user_id = session('userid');
        if(DB::table('skils')->where([
            ['skil', '=', $skil],
            ['user_id', '=', $user_id],
        ])->exists())
        {
            $req->session()->flash('error','Already Present');
            return redirect('/skil');
        }
        else{
            DB::table('skils')->insert([
                'skil'=> $skil,
                'percentage'=> $percentage,
                'sty_per'=>'style=width:'.$percentage.'%',
                'user_id'=> $user_id,
                

            ]);
            return redirect('/profile');

        }
    }

    public function edit_skil($id)
    {
        $skils = DB::table('skils')->where('id', $id)->get();
        return view('edit.skils',['skils'=>$skils]);
    }

       public function edit_postskil(Request $req,$id)
    {
        $skil=ucfirst($req->input('skil'));
        $percentage=$req->input('percentage');
        $user_id = session('userid');
        DB::table('skils')->where('id', $id)->update([
            'skil'=> $skil,
            'percentage'=> $percentage,
            'sty_per'=>'style=width:'.$percentage.'%',
            'user_id'=> $user_id,
            

        ]);
        return redirect('/profile');
    }
    public function delete_postskil($id)
    {
         DB::table('skils')->where('id', $id)->delete();
       
         return redirect('/profile');
    }
}
