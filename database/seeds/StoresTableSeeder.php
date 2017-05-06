<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stores')->insert([
        [
          'name' => "Folk Å Rock",
          'city' => "Malmö",
        ],
        [
          'name' => "Blue Desert Music",
          'city' => "Malmö",
        ],
        [
          'name' => "CDON.com",
          'city' => "Stockholm",
        ]
      ]);
    }
}
