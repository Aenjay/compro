<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
	private $route = "blog";
    private $titlePage = "Blog";
    private $model;

	public function __construct(Blog $model){
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
			})->editColumn('file', function ($d) use ($route) {
				return '<img src="'.$d->file_url.'" width="50">';
			})->escapeColumns([])
			->make(true);
	}

    public function create() {
        $data = [
            "route" => $this->route,
            "titlePage" => $this->titlePage,
        ];
        return view("admin.$this->route.create", $data);
    }

	public function edit($id = "")
	{
		$item = $this->model::find($id);
		$data = [
            "route" => $this->route,
            "titlePage" => $this->titlePage,
			'item' => $item,
		];
		return view("admin.$this->route.edit", $data);
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

    public function store(BlogRequest $request)
	{
		$request->validated();
        $data = $request->all();
        $data_common = [];
        if ($files = $request->file('file')) {
            $destinationPath = "public/blog/media";
            $profileImage = date('YmdHis') . "-" . $request->file->getClientOriginalName();
            $files->storeAs($destinationPath, $profileImage);
            $data_common['file'] = $profileImage;
        }
        unset($data['file']);
		$this->model::create($data + $data_common);
		return redirect()->route($this->route.'.index')->with('success', 'Data created successfully.');
	}

	public function update(BlogRequest $request)
	{
		$request->validated();
        $record = $this->model::find($request->id);
        $file_lama = $record->file;
        $data = $request->all();
        $data_common = [];
        if ($files = $request->file('file')) {
            $destinationPath = "public/blog/media";
            $profileImage = date('YmdHis') . "-" . $request->file->getClientOriginalName();
            $files->storeAs($destinationPath, $profileImage);
            $data_common['file'] = $profileImage;
        }
        unset($data['file']);
        $record->update($data + $data_common);
        $file_path = "blog/media/" . $file_lama;
        if ($request->file('file') and $file_lama != '' and Storage::disk('public')->exists($file_path) == true) {
            Storage::disk('public')->delete($file_path);
        }
		return redirect()->route($this->route.'.index')->with('success', 'Data updated successfully.');
	}

	public function destroy($id)
	{
        $record = $this->model::find($id);
        $record->delete();
		return redirect()->route($this->route.'.index')->with('success', 'Data deleted successfully.');
	}
}
