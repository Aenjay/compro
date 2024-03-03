<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $data = [
            'content' => 'home/about/index'
        ];
        return view('home.layouts.wrapper', $data);
    }
}
