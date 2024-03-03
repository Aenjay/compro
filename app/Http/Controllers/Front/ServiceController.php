<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $serviceModel;

	public function __construct(Service $serviceModel){
        $this->serviceModel = $serviceModel;
    }

    public function index() {
        $data = [
            'content' => 'home/services/index',
            'getService' => $this->serviceModel::get(),
        ];
        return view('home.layouts.wrapper', $data);
    }
}
