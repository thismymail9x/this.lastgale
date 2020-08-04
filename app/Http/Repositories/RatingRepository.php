<?php


namespace App\Http\Repositories;


use App\Rating;

class RatingRepository
{
    protected $rating;
    public function __construct(Rating $rating)
    {
        $this->rating = $rating;
    }

    function save($rating) {
        $rating->save();
    }

    function getById($id) {
        return $this->rating->findOrFail($id);
    }

    function delete($id) {
        $rating = $this->getById($id);
        $rating->delete();
    }
}
