<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
	private $route = "contact";
    private $titlePage = "Contact";
    private $model;

	public function __construct(Contact $model){
        $this->model = $model;
    }

    public function index() {
        $data = [
            "route" => $this->route,
            "titlePage" => $this->titlePage,
        ];
        return view('admin.'.$this->route.'.index', $data);
    }

	public function table(Request $request)
	{
        $route = $this->route;
        $data = $this->model::select(["*"]);
		return DataTables::of($data)
			->addColumn('opsi', function ($d) use ($route) {
				return view("admin.".$this->route.".buttons", compact("d", "route"));
			})->escapeColumns([])
			->make(true);
	}

	public function show($id = "")
	{
		$item = $this->model::find($id);
		$data = [
            "route" => $this->route,
            "titlePage" => $this->titlePage,
			'item' => $item,
		];
		return view("admin.$this->route.show", $data);
	}
}
