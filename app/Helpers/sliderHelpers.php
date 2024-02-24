<?php

use Illuminate\Support\Facades\File;    
use Intervention\Image\ImageManager;



// dd(ini_get('post_max_size'));
function getMaxUploadSide(){
    // dd(ini_get('post_max_size'));
    $maxSize = ini_get('upload_max_filesize');
    return substr($maxSize, 0, -1) * 1000 -500;
}

if (!function_exists('getSlider')) {
    function getSlider()
    {
        
        return 'This is a helper function!';
    }
}

function deleteImages($image){
    if(isset($image)){
        if(File::exists(public_path('web').'/media/lg/'.$image)){
            unlink(public_path('web').'/media/lg/'.$image);
          }
          if(File::exists(public_path('web').'/media/md/'.$image)){
            unlink(public_path('web').'/media/md/'.$image);
        }
        if(File::exists(public_path('web').'/media/sm/'.$image)){
            unlink(public_path('web').'/media/sm/'.$image);
        }
        if(File::exists(public_path('web').'/media/xs/'.$image)){
            unlink(public_path('web').'/media/xs/'.$image);
        }
        if(File::exists(public_path('web').'/media/icon/'.$image)){
            unlink(public_path('web').'/media/icon/'.$image);
        }
    }
}

function uploadImageThumb($request, $fileName = null, $prefix = null){
    // dd($request->file('image'));

    $manager = new ImageManager(
        new Intervention\Image\Drivers\Gd\Driver()
    );
    
    
    if (request()->hasFile('image')) {
    // open an image file
    $image = $manager->read($request->file('image'));
    $image_name = $prefix.time().'_'.rand(111,999).'.webp';
    
    // Icons Convversion

    $iconPath = public_path('web/media/icon');
    $iconImage = $manager->read($request->file('image'));
    $iconImage->scaleDown(width: 200);
    $iconImage->save($iconPath.'/'.$image_name);

    

    // xs Convversion

    $xsPath = public_path('web/media/xs');
    $xsImage = $manager->read($request->file('image'));
    $xsImage->scaleDown(width: 500);
    $xsImage->save($xsPath.'/'.$image_name);

    // sm Convversion

    $smPath = public_path('web/media/sm');
    $smImage = $manager->read($request->file('image'));
    $smImage->scaleDown(width: 1000);
    $smImage->save($smPath.'/'.$image_name);

    // md Convversion

    $mdPath = public_path('web/media/md');
    $mdImage = $manager->read($request->file('image'));
    $mdImage->scaleDown(width: 1500);
    $mdImage->save($mdPath.'/'.$image_name);

    // lg Convversion

    $lgPath = public_path('web/media/lg');
    $lgImage = $manager->read($request->file('image'));
    $lgImage->scaleDown(width: 3000);
    $lgImage->save($lgPath.'/'.$image_name);
    
    return $image_name;
    }
    else{
        return null;
    }

}

