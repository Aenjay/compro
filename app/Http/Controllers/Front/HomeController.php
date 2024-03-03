<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $serviceModel;
    private $blogModel;

	public function __construct(Service $serviceModel, Blog $blogModel){
        $this->serviceModel = $serviceModel;
        $this->blogModel = $blogModel;
    }

    public function index() {
        $data = [
            'content' => 'home/home/index',
            'getService_home' => $this->serviceModel::limit(4)->get(),
            'getBlog_home' => $this->blogModel::limit(4)->get(),
        ];
        return view('home.layouts.wrapper', $data);
    }
}
