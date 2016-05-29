<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticable;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model implements Authenticable
{
    //
    use Authenticatable;
}
