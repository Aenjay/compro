<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            "titlePage" => "Dashboard"
        ];
        return view('admin.dashboard.index', $data);
    }
}