<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {

        return view('posts.index');

    }

    public function cards()
    {
        $data=[
            ['name'=>'apple','price'=>50],
            ['name'=>'samsung','price'=>110],
            ['name'=>'sony','price'=>520],
            ['name'=>'hawawi','price'=>450],
        ];

        return view('cards.index', ['d'=>$data]);

    }

}
