<?php

namespace App\Http\Repositories;

use App\HouseDetail;

class HouseDetailRepository
{
    protected $houseDetail;

    public function __construct(HouseDetail $houseDetail)
    {
        $this->houseDetail = $houseDetail;
    }

    public function create($data)
    {
        $this->houseDetail->create($data);
    }
}
