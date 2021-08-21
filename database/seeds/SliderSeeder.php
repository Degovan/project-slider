<?php

use App\Slider;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title' => 'No Title',
            'text' => Lorem::words(20, true)
        ]);
    }
}
