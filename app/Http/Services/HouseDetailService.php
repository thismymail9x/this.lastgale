<?php

namespace App\Http\Repositories;

class HouseDetailService
{
    protected $houseDetailRepository;

    public function __construct(HouseDetailRepository $houseDetailRepository)
    {
        $this->houseDetailRepository = $houseDetailRepository;
    }

    public function create($request)
    {
        $this->houseDetailRepository->create($request);
    }
}