<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $getSlider = Slider::all();
        $count = Slider::count();

        return view('home', compact('getSlider', 'count'));
    }
}
