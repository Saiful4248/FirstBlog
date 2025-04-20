<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class fileUploadController extends Controller
{
    //

    function index()  {
        return view("file");
    }


    function store(Request $request)  {
        
        $request->validate(
            [
                "avatar" => ["required", File::types(['png', 'webp'])
                ->min('300kb')
                ->max('1mb')],
            ]
            );

       $path = Storage::putFile('public/myfile', $request->file('avatar'));
       $url = Storage::url($path);

       // than save to the db url value;


    }
}
