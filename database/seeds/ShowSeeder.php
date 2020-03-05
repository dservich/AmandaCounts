<?php

use Illuminate\Database\Seeder;
use App\Show;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Show::class, 20)->create();
    }
}
