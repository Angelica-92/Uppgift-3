<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->insert([
        [
          'product_id' => 1,
          'rating' => 5,
          'comment' => "Perfekt!!!",
        ],
        [
          'product_id' => 2,
          'rating' => 3,
          'comment' => "Helt ok",
        ],
        [
          'product_id' => 3,
          'rating' => 2,
          'comment' => "Blir lätt tråkig",
        ]
      ]);
    }
}
