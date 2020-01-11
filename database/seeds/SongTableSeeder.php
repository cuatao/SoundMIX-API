<?php

use Illuminate\Database\Seeder;
use App\Model\Song;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Song::class, 50)->create();
    }
}
