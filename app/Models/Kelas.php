<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Laravel otomatis pakai tabel 'kelas' karena nama model 'Kelas'
    protected $table = 'kelas';

    // Kolom yang boleh diisi mass-assignment
    protected $fillable = ['nama_kelas'];

    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

    public function getKelas()
    {
        return $this->all();
    }
}
