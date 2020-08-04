<?php

namespace App\Http\Controllers;

use App\Http\Services\RatingService;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    protected $ratingService;
    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    function create(Request $request) {
        $this->ratingService->create($request);
    }

    function update($id, Request $request) {
        $this->ratingService->update($id, $request);
    }

    function delete($id) {
        $this->ratingService->delete($id);
        return back();
    }
}
