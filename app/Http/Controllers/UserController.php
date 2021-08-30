<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginpost(Request $req)
    {

        $email = $req->input('email');
        $password = $req->input('password');

        $exist = DB::table('user')->where('email', $email)->exists();

        if ($exist) {
            $data = DB::table('user')->where('email', $email)->get();

            if (Hash::check($password, $data[0]->password)) {
                $req->session()->put('username', $data[0]->name);
                $req->session()->put('userid', $data[0]->id);
                $req->session()->put('useremail', $data[0]->email);
                // dd(session('userid'));

                return redirect('/');
            } else {
                $req->session()->flash('error', 'Password wrong');
                return view('login');
            }
        } else {
            $req->session()->flash('error', 'Email Not Present');
            return view('login');
        }
    }


    public function register()
    {
        return view('register');
    }
    public function registerpost(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');

        if (DB::table('user')->where('email', $email)->exists()) {
            $req->session()->flash('error', 'Email already Present');
            return view('register');
        } else {
            DB::table('user')->insert([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)

            ]);
            return redirect('/login');
        }
    }


    public function cv_maker()
    {
        $id = session('userid');
        if (empty($id)) {

            return view('cv_maker', ['profile' => [], 'skils' => [], 'works' => [], 'edus' => [], 'links' => []]);
        } else {


            $profile = DB::table('profile')->where('user_id', $id)->get();
            $skils = DB::table('skils')->where('user_id', $id)->get();
            $works = DB::table('works')->where('user_id', $id)->get();
            $edus = DB::table('education')->where('user_id', $id)->get();
            $links = DB::table('links')->where('user_id', $id)->get();
            //  dd($profile);
            return view('cv_maker', ['profile' => $profile, 'skils' => $skils, 'works' => $works, 'edus' => $edus, 'links' => $links]);
        }
    }

    public function download_pdf()
    {
        $id = session('userid');
        $profile = DB::table('profile')->where('user_id', $id)->get();
        $skils = DB::table('skils')->where('user_id', $id)->get();
        $works = DB::table('works')->where('user_id', $id)->get();
        $edus = DB::table('education')->where('user_id', $id)->get();
        $links = DB::table('links')->where('user_id', $id)->get();

        // $path = base_path();
        $path='img/user.png';
        $pdfname=session('username').'_Resume';
        if(count($profile))
        {
            $path = 'img/upload/'. $profile[0]->profileimg;
            

        }
       
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $pdf = PDF::loadView('pdf_maker', ['pic'=>$pic,'profile' => $profile, 'skils' => $skils, 'works' => $works, 'edus' => $edus, 'links' => $links])->setOptions(['defaultFont' => 'sans-serif']);
        $pfname=$pdfname.'.pdf';
        return $pdf->download($pfname);
        // return $pdf->stream('invoice.pdf');
    }





    public function profile()
    {
        $id = session('userid');
        if (empty($id)) {

            return view('profile', ['profile' => [], 'skils' => [], 'works' => [], 'edus' => [], 'links' => []]);
        } else {


            $profile = DB::table('profile')->where('user_id', $id)->get();
            $skils = DB::table('skils')->where('user_id', $id)->get();
            $works = DB::table('works')->where('user_id', $id)->get();
            $edus = DB::table('education')->where('user_id', $id)->get();
            $links = DB::table('links')->where('user_id', $id)->get();
            //  dd($profile);
            return view('profile', ['profile' => $profile, 'skils' => $skils, 'works' => $works, 'edus' => $edus, 'links' => $links]);
        }
    }


    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
