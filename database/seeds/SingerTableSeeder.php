<?php

use Illuminate\Database\Seeder;
use App\Model\Singer;

class SingerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Singer::class, 50)->create();

        factory(Singer::class, 10)->create()->each(function ($user) {
            $user->songs()->saveMany(factory(\App\Model\Song::class, 10)->make());
        });
    }
}
