<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'username', 'company', 'email', 'password'
        , 'fname'
        , 'lname'
        , 'mls_agent_id'
        , 'mls_area'
        , 'mls_address'
        , 'mls_login_id'
        , 'mls_login_pwd'
        , 'credentials'
        
        , 'phone'
        , 'assist_phone'
        , 'phone1_carrier'
        , 'phone2_carrier'
        , 'cell1_reminder'
        , 'cell2_reminder'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
