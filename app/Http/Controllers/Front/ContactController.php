<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    private $model;
	public function __construct(Contact $model){
        $this->model = $model;
    }

    public function index() {
        $data = [
            'content' => 'home/contact/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function store(ContactRequest $request)
	{
		$request->validated();
        $data = $request->all();
		$this->model::create($data);
        return redirect()->route('login')->withSuccess("Berhasil Daftar");
	}
}
