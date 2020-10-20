<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    //
    protected $fillable = ['type_name', 'position', 'store_id'];

    public function products()
    {
        return $this->hasMany('App\Product', 'type_id', 'type_id');
    }
    public function store()
    {
        return $this->belongsTo('App\Store', 'store_id', 'store_id');
    }
}
