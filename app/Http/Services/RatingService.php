<?php


namespace App\Http\Services;


use App\Http\Repositories\RatingRepository;
use App\Rating;

class RatingService
{
    protected $ratingRepository;
    public function __construct(RatingRepository $ratingRepository)
    {
        $this->ratingRepository = $ratingRepository;
    }

    function create($request) {
        $rating = new Rating();
        $rating->house_id = $request->house;
        $rating->user_id = $request->user;
        $rating->stars = $request->stars;
        $rating->comments = $request->comments;
        $this->ratingRepository->save($rating);
    }

    function update($id, $request) {
        $rating = $this->ratingRepository->getById($id);
        $rating->house_id = $request->house;
        $rating->user_id = $request->user;
        $rating->stars = $request->stars;
        $rating->comments = $request->comments;
        $this->ratingRepository->save($rating);
    }

    function delete($id) {
        $this->ratingRepository->delete($id);
    }
}
