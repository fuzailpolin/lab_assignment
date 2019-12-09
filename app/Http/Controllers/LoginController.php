<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\DB;
use App\User;

class LoginController extends Controller
{
    public function index(){
		return view('login.loginIndex');
	}
	public function verify(Request $req){
		$user = User::where('username', $req->username)
					->where('password', $req->pass)
					->first();
					
		if(count($user) > 0 ){
	
			$req->session()->put('name', $req->input('username'));
			$req->session()->put('user', $user);
			//echo "login Done";
			
			return redirect()->route('home.index');
			
			/* if($req->session()->get('user')->type == 'admin'){
				return redirect()->route('admin.index');
			}
			else if($req->session()->get('user')->type == 'customer'){
				return redirect()->route('home.index');
			} */
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			//return redirect('/login');
		}
	}
}
