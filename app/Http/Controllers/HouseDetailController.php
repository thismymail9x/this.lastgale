<?php

namespace App\Http\Controllers;

use App\Http\Repositories\HouseDetailService;
use Illuminate\Http\Request;

class HouseDetailController extends Controller
{
    protected $houseDetailService;

    public function __construct(HouseDetailService $houseDetailService)
    {
        $this->houseDetailService = $houseDetailService;
    }
}
