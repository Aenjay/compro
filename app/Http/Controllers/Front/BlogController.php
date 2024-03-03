<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogModel;

	public function __construct(Blog $blogModel){
        $this->blogModel = $blogModel;
    }

    public function index() {
        $data = [
            'content' => 'home/blog/index',
            'getBlog' => $this->blogModel::get(),
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function show($id="") {
        $item = $this->blogModel::find($id);
        if ($item == null) {
            abort(404);
        }
        $data = [
            'content' => 'home/blog/show',
            'item' => $item,
        ];
        return view('home.layouts.wrapper', $data);
    }
}
