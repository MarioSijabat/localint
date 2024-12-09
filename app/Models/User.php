<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'username',
        'password',
        'angkatan',
        'nim',
        'email',
        'kelas',
        'prodi',
        'wali',
        'role',
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
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getVisibleAttributesByRole($role)
    {
        if ($role === 'Orang Tua') {
            return $this->only([
                'nama',
                'username',
                'angkatan',
                'nim',
                'email',
                'kelas',
                'prodi',
                'wali',
            ]);
        }

        // For other roles, return only limited fields
        return $this->only([
            'nama',
            'username',
        ]);
    }
}
