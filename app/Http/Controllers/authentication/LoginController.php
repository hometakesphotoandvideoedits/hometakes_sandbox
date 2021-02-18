<?php

namespace App\Http\Controllers\authentication;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class LoginController extends Controller
{
    public function authentication(Request $request)
    {
        if($_REQUEST) {
            if(isset($_REQUEST['logout'])) {
                //Flush = tangtangon ang session data
                Session::flush();
                return redirect('/login');
            }
        }
        if($request->ismethod('POST')){
            $username_entered = $request->username;
            $pass_entered = $request->password;
            
            $query = DB::table('users')
            ->where(
                [
                    'username' => $username_entered
                ]
            )
            ->first();

            if(isset($query)){
                $return_username = $query->username;
                $return_password = $query->pwd;
                
                if(Hash::check($pass_entered,$return_password))
                {
                    Session::put('user_id', $query->id);
                    Session::put('user', $query);
                    return redirect('/dashboard');
                }
            }
            return redirect('/login')->withErrors(['Incorrect Username or Password']);
        } else {
            if(!Session::has('user_id')){
                //Hash make password
                return view('login.index', ['tyui' => Hash::make('asdfg')]);
            }else{
                return redirect('/dashboard');
            }
        }
    }


}
