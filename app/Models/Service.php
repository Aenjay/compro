<?php

namespace App\Models;

use App\Blameable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory, SoftDeletes, Blameable;
	protected $guarded = [];
	protected $table = "service";

	public function created_by_user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function updated_by_user()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

	public function getFileUrlAttribute()
	{
		$file_path = "service/media/" . $this->file;
		$result = asset('img/no-image.jpeg');
		if ($this->file != "" and Storage::disk('public')->exists($file_path)) {
			$result = url(Storage::url($file_path));
		}
		return $result;
	}
}
