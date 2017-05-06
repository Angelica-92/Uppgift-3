<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          [
            'album' => 'Divide',
            'title' => 'Ed Sheeran',
            'price' => 260,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/45/Divide_cover.png/220px-Divide_cover.png',
          ],
          [
            'album' => 'Kristaller',
            'title' => 'Laleh',
            'price' => 150,

            'image' => 'http://gfx.bloggar.aftonbladet-cdn.se/wp-content/blogs.dir/456/files/2016/09/KRISTALLER-COVER.',
          ],
          [

            'title' => 'Adele',
            'price' => 99,
          ]
        ]);
    }
}
