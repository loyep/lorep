<?php

use Illuminate\Database\Seeder;
use App\Entities\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = factory(Option::class, 100)->create();
    }
}
