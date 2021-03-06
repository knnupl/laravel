<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use JavaScript;


class PagesController extends Controller
{
    function getIndex(){

        $posts = Post::orderBy('created_at','desc')->limit(5)->get();

        JavaScript::put([
            'posts' => $posts,
        ]);

        return view('pages.welcome');
    }

    function getAbout(){
      $data = [];
      $data['email'] = "kunanan@eecl.co.th";
      $data['name'] = "Kunanan Upala";
        return view('pages.about')
        -> withData($data);
    }
    function getContact(){
        return view('pages.contact');
    }
}
