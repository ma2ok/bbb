<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $fillable = ['store_name', 'store_appearance', 'dividedBy'];

    public function location()
    {
        return $this->hasOne('App\Location', 'store_id', 'store_id');
    }

    public function floors()
    {
        return $this->hasMany('App\Floor', 'store_id', 'store_id');
    }

    public function types()
    {
        return $this->hasMany('App\Type', 'store_id', 'store_id');
    }
}
