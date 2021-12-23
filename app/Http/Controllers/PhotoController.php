<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    public function upload(Request $request){
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg'
        ]);

        $photo_name = Str::random(10).'.'.time().'.'.$request->file('photo')->getClientOriginalExtension();

        $request->file('photo')->move('uploads', $photo_name);

        return response()->json(['url' => asset('uploads/'.$photo_name)]);
    }

    public static function delete($photo_url){
        $photo_name = explode('/', $photo_url);
        $photo_name = end($photo_name);
        if (file_exists(public_path('uploads/' . $photo_name))) {
            unlink(public_path('uploads/' . $photo_name));
        }
    }
}
