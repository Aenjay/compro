<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    private $usersModel;
	public function __construct(User $usersModel){
        $this->usersModel = $usersModel;
    }

    public function index() {
        $data = [
            'content' => 'home/auth/register'
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function store(RegisterRequest $request) {
        $request->validated();
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['role'] = $this->usersModel::ROLE_USER;
        $this->usersModel::create($data);
        return redirect()->route('login')->withSuccess("Berhasil daftar!");
    }
}
