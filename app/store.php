<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable =['id','name','pan','call','reg','address','city','email','mobile','status'];
}
