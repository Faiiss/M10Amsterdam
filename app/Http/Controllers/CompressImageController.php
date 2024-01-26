<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompressImageController extends Controller
{
    public function compress(Request $request)
    {
        $this->validate($request, [
            'image_format' => ['required','string','max:5']
        ]);
    }
}
