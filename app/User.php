<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    /**
    * Return if user is superuser privileges
    */


    public function company_information(){
        return $this->hasOne('App\CompanyInformation', 'userID');
    }

    public function is_admin() {
        return $this->role === 1;
    }

    public function is_client() {
        return $this->role === 0;
    }
}
