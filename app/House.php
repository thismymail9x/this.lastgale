<?php

namespace App;

use Laravelista\Comments\Commentable;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use Commentable;

    protected $fillable = [
        'name',
        'house_category',
        'room_category',
        'bedroom_amount',
        'bathroom_amount',
        'description',
        'address',
        'price',
        'location',
        'user_id',
    ];

    public function houseDetails()
    {
        return $this->hasMany('App\HouseDetail');
    }


    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
