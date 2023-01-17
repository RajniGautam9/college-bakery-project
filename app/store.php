<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable =['id','name','pan','phone','reg','address','city','email','mobile','status'];
}
