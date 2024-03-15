<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = [
            'First article', 
            'Second article'
        ];

        return view('article', compact('posts'));

        // return view('nomView')->with('var', $value);
    }

    public function show($id){
        $posts = [
            1 => "1er site",
            2 => "Second site"
        ];

        $post = $posts[$id] ?? 'Autre site';

        return view('article1', ['post' => $post]);
    }

    public function contact(){
        return view('contact');
    }


}
