<?php

namespace Database\Seeders;

use App\Models\Slider;
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
            'image_name' => 'MM.jpg',
        ]);
        Slider::create([
            'image_name' => 'RPL.jpg',
        ]);
        Slider::create([
            'image_name' => 'slider.jpeg',
        ]);

    }
}
