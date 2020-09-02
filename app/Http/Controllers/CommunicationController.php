<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommunicationController extends Controller
{
    public function index(Request $request) {
        $items = Post::all();
        return view('communication',['items' => $items]);
    }

    public function create(Request $request) {
        $this-> validate($request,Post::$rules);
        $post = new Post;
        $form = $request -> all();
        unset($form['_token']);
        $post->fill($form)->save();
        return redirect('/communication');
    }
}
