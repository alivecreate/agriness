<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Slider;

class PageController extends Controller
{
    public function index(){
        $slider = Slider::all(); 
        return view('front.pages.index', compact('slider'));

    }
    public function about(){
        $slider = Slider::all(); 
        return view('front.pages.about', compact('slider'));
    }
}
