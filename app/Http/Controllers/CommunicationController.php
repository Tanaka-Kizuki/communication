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
}
