<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class,100)->create()->each(function($item) {
            $item->category_details()->save(factory(App\CategoryDetail::class)->make());
        });
    }
}
