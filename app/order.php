<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model

{
    public function customer()
{
    return $this->belongsTo(customer::class);
}
    protected $fillable = ['id','customer_id','order','amount','discount','tamount','payment','message','status'];
}
