<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseDetail extends Model
{
    protected $fillable = ['house_id', 'filename'];

    public function house()
    {
        return $this->belongsTo('App\House');
    }
}