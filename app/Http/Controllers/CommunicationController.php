<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index() {
        $item = [
            'name' => 'writer',
            'title' => 'test',
            'message' => '業務連絡をここに記載する。',
            'id' => 1
        ];
        return view('home',$item);
    }
}
