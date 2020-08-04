<?php


namespace App\Http\Services;

use App\House;
use App\Http\Repositories\HouseDetailRepository;
use App\Http\Repositories\HouseRepository;

class HouseService
{
    protected $houseRepository;
    protected $houseDetailRepository;

    public function __construct(HouseRepository $houseRepository, HouseDetailRepository $houseDetailRepository)
    {
        $this->houseRepository = $houseRepository;
        $this->houseDetailRepository = $houseDetailRepository;
    }

    public function findById($id)
    {
        return $this->houseRepository->findById($id);
    }

    public function store($request)
    {
        if ($request->hasFile('image')) {
            $allowedFileExtension = ['jpg', 'png', 'jpeg'];
            $files = $request->file('image');
            $exe_flg = true;
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedFileExtension);
                if (!$check) {
                    $exe_flg = false;
                    break;
                }
            }
            if ($exe_flg) {
                $house = $this->houseRepository->store($request->except('image'));
                foreach ($files as $file) {
                    $filename = $file->store('images', 'public');
                    $this->houseDetailRepository->create([
                        'house_id' => $house->id,
                        'filename' => $filename
                    ]);
                }
                return true;
            } else {
                return false;
            }
        }
    }

    public function getAll()
    {
        return $this->houseRepository->getAll();
    }

    public function search($bedRoom, $bathRoom, $priceLimit, $location)
    {

        return $this->houseRepository->search($bedRoom, $bathRoom, $priceLimit, $location);
    }


    function getReviewById($id) {
        return $this->houseRepository->getReviewById($id);
    }
}
