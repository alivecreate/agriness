<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $result = myCustomFunction();

        getSlider();
        $slider = Slider::all(); // Retrieve all sliders from the database
        return view('admin.pages.slider.index', compact('slider'));
    }

    public function create()
    {        
        $result = myCustomFunction();
        return view('admin.pages.slider.create');
    }

    public function store(Request $request)
    {
        
        $slider = Slider::orderBy('item_no', 'desc')->first();
        if(!$slider){
            $item_no = 1;
        }else{
            $item_no = $slider->item_no + 1;
        }
        
        
        if(isset($request->type)){
            $type = 'video';
        }else{
            $type = 'image';
        }
        
        $image_name = uploadImageThumb($request);

        // $imagePath = $request->file('image')->store('slider_images', 'public');


        Slider::create([
            'item_no' => $item_no,
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'url' => $request->url,
            'image' => $image_name,
        ]);
    

        return redirect()->route('slider.create')->with('success', 'Slider added successfully.');

    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the slider
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('slider.index')->with('error', 'Slider not found.');
        }

        $slider->delete();
        deleteImages($slider->image);

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    
    }
}
