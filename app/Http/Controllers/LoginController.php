<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
        //echo $req->name;
        $name = DB::table('users')->where('username',$req->name)
                ->where('password',$req->password)
                ->first();
        if($name != null)
        {
            $req->session()->put('x',$req->name);
            return view('home.index');
        }
        else{
            echo "Invalide User!!!!";
        }
    }
}
