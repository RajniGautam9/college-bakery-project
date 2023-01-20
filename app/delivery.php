<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    protected $fillable= ['id','name','address','phone','payment','status'];
}
