<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable =['id','name','image','phone','address','gender','email','status'];
}
