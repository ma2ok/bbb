<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_name', 'type_id'];

    public function type(){
        return $this->belongsTo('App\Type', 'type_id', 'type_id');
    }
}
