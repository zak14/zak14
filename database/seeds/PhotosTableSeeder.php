<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Photo::truncate();
        factory(Photo::class,50)->create();
    }
}
