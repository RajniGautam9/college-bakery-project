<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function order()
{
    return $this->hasMany(order::class);
}
    protected $fillable= ['id','name','image','phone','address','gender','email','status'];
}
