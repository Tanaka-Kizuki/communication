<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommunicationController extends Controller
{
    public function index(Request $request) {
        $items = Post::all();
        return view('communication.index',['items' => $items]);
    }

    public function create(Request $request) {
        $this-> validate($request,Post::$rules);
        $post = new Post;
        $form = $request -> all();
        unset($form['_token']);
        $post->fill($form)->save();
        return redirect('/communication');
    }

    public function edit(Request $request) {
        $form = Post::find($request->id);
        return view('communication.edit',['form'=>$form]);
    }

    public function update(Request $request) {
        $this->validate($request,Post::$rules);
        $post = Post::find($request->id);
        $form = $request -> all();
        unset($form['_token']);
        $post->fill($form)->save();
        return redirect('/communication');
    }
}
