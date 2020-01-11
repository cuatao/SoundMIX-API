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
        factory(Singer::class, 50)->create();
    }
}
