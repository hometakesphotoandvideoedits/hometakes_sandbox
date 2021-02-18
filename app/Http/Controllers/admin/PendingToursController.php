<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\User;
use Datatables;
use DB;
use Session;


class PendingToursController extends Controller
{
    function index()
    {
        return view('admin.pending_tours');
        //htt:/127.0.0.1:8000/ajaxdata
    }

    function getdata()
    {
        $pendingtours = User::select('id', 'username', 'company',
        'fname',
        'lname',
        'mls_agent_id',
        'mls_area',
        'mls_address',
        'mls_login_id',
        'mls_login_pwd',
        'credentials',
        'email',
        'phone',
        'assist_phone',
        'phone1_carrier',
        'phone2_carrier',
        'cell1_reminder',
        'cell2_reminder');
        return Datatables::of($pendingtours)->make(true);
    }
}
