<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'c_name', 'c_address', 'c_telephone','email',
    ];
    public function user(){
        return $this->belongsTo('App\User','userID');
    }
    public function methods()
    {
        return $this->hasMany('App\PaymentMethod');
    }
}
