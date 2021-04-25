<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic;

class SliderController extends Controller
{
    public function listSlider(){
        $data ['slider'] = Slider::orderBy('created_at', 'DESC')->get();
        return view ('pages.admin.slider', $data);
    }

    public function ChangeSlider($id, Request $request){
        $cek = Slider::whereId($id)->first();
        $destinationPath = public_path('images/slider/');
        $file_name = $cek->image_name;


        $img = $request->file('img');

        $img = ImageManagerStatic::make($img);

        File::delete($destinationPath.$file_name);

        $upload_img = $img->resize(null, 640, function ($constraint) {
            $constraint->aspectRatio();
        });
        $upload_img->save(public_path("images/slider/{$file_name}"), 90, 'png');

        $cek->image_name = $file_name;
        $cek->save();

        return back()->withSuccess('Banner Berhasil DItambahkan');

    }
}
