<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    //
    protected $fillable = ['floor', 'floor_map', 'store_id'];

    public function store(){
        return $this->belongsTo('App\Store', 'store_id', 'store_id');
    }
}
