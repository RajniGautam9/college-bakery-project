<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class brand extends Model
{

    public function category()
{
    return $this->belongsTo(category::class);
}
    protected $fillable = ['id','name','image','category_id','status'];
}
