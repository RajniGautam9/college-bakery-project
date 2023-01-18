<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['id','name','order','amount','discount','tamount','payment','message','status'];
}
