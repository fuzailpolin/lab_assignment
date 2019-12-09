<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\layoutModel;
use Illuminate\Support\Facades\DB;

class regController extends Controller
{
    public function index(){
		return view('registration.regIndex');
	}
	
	public function store(Request $req){
		$user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        //$user->name = $req->username;
        $user->type = "customer";
		
		//setlayout
		
		$layout = new layoutModel();
		$layout->username = $req->username;
        $layout->layout = 'standard';
		$layout->save();
		
		//save user
        if($user->save()){
            return redirect()->route('home.index');
        }else{
            //return redirect()->route('student.add');
			echo "not Registered";
        }
	}
}
