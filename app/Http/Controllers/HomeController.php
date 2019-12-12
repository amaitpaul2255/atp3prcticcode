<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Review;
use App\Rating;
use App\Feedback;
use Validator;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class HomeController extends Controller
{
    function index(Request $req)
    {
    	if($req->session()->has('x')){
    		return view('home.index',);
    	}else{
    		return redirect('/login');
    	}
	}
	
}
