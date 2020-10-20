<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = ['address', 'location', 'store_id'];

    public function store(){
        return $this->belongsTo('App\Store', 'store_id', 'store_id');
    }
}
