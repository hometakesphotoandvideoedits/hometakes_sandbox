<?php

namespace App\Http\Controllers\users\edit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class EditUserController extends Controller
{
    public function ViewUser(Request $request)
    {

        $user_sesh = Session::get('user_id');
        $query = DB:: select("SELECT * FROM users WHERE id = $user_sesh");
        
        //Check if query returns data
        if(count($query) >0){
            $query = $query[0];
        }
        //Other Way of getting the data
        // $users = DB::table('users')
        // ->where([['id',Session::get('user_id')]])
        // ->first();

        return view('users.edit.edit_user', [
            'users' => $query
        ]);
    }

}
