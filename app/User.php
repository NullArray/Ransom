<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function CreateUser($request)
    {
        DB::table('users')->insert
        (
            [
                [
                    'username' => $request['username'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']), 
                    'created_at' => Carbon\Carbon::create(),
                    'updated_at' => Carbon\Carbon::create()
                ]
            ]
        );
    }
}
