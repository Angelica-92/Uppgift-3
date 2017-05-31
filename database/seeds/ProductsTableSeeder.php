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
            //'store_id' => 1,
            'album' => 'Divide',
            'title' => 'Ed Sheeran',
            'price' => 260,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/45/Divide_cover.png/220px-Divide_cover.png',
          ],
          [
            //'store_id' => 2,
            'album' => 'Kristaller',
            'title' => 'Laleh',
            'price' => 150,
            'image' => 'http://gfx.bloggar.aftonbladet-cdn.se/wp-content/blogs.dir/456/files/2016/09/KRISTALLER-COVER.',
          ],
          [
            //'store_id' => 1,
            'album' => '25',
            'title' => 'Adele',
            'price' => 99,
            'image' => 'https://s-media-cache-ak0.pinimg.com/736x/a9/95/9c/a9959c17c8260650136fdc4a7d8bb218.jpg',
          ]
        ]);
    }
}
