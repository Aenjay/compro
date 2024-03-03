<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'file',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

	const ROLE_SUPER_ADMIN = "Super Admin";
	const ROLE_ADMIN       = "Admin";
	const ROLE_USER        = "User";

	public function listRole(): array
	{
		return [
			self::ROLE_SUPER_ADMIN => self::ROLE_SUPER_ADMIN,
			self::ROLE_ADMIN => self::ROLE_ADMIN,
			self::ROLE_USER => self::ROLE_USER,
		];
	}
    
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
		$file_path = "users/media/" . $this->file;
		$result = asset('img/no-image.jpeg');
		if ($this->file != "" and Storage::disk('public')->exists($file_path)) {
			$result = url(Storage::url($file_path));
		}
		return $result;
	}
}
