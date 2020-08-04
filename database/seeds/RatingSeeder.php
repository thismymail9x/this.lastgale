<?php

use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rating = new \App\Rating();
        $rating->user_id = 1;
        $rating->house_id = 1;
        $rating->stars = 5;
        $rating->comments = 'Excellent';
        $rating->save();

        $rating = new \App\Rating();
        $rating->user_id = 1;
        $rating->house_id = 1;
        $rating->stars = 4;
        $rating->comments = 'Good';
        $rating->save();

        $rating = new \App\Rating();
        $rating->user_id = 1;
        $rating->house_id = 1;
        $rating->stars = 3;
        $rating->comments = 'Ok';
        $rating->save();

        $rating = new \App\Rating();
        $rating->user_id = 1;
        $rating->house_id = 1;
        $rating->stars = 2;
        $rating->comments = 'Bad';
        $rating->save();

        $rating = new \App\Rating();
        $rating->user_id = 1;
        $rating->house_id = 1;
        $rating->stars = 1;
        $rating->comments = 'Very Bad';
        $rating->save();
    }
}
