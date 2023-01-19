<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
   protected $fillable = ['id','name','email','phone','address','website','image','details'];
}
