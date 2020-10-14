<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username', 'roles', 'phone', 'avatar', 'status' //mengizinkan untuk operasi mass-assignment pada field2 yang tercantum diatas
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //function ini digunakan untuk menggenerate token untuk keperluan logout setelah login.
    public function generateToken(){
        $this->api_token = Str::random(60);//untuk menggenerate teks random sebanyak 60 karakter dan disimpan pada field api_token
        $this->save();
        return $this->api_token;
    }
}
