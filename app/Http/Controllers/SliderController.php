<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function listSlider(){
        return view ('pages.admin.slider');
    }
}
