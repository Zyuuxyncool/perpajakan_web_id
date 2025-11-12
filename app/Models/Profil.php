<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profils';

    protected $fillable = [
        'user_id',
        'uuid',
        'photo',
        'name',
        'alamat',
        'tanggal_lahir',
        'notlp',
        'jenis_kelamin',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
    ];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
