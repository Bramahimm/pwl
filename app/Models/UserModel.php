<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user'; // <- ganti ke user

    protected $fillable = ['nama', 'nim', 'kelas_id'];

    public function getUser()
    {
        return $this->join('kelas', 'user.kelas_id', '=', 'kelas.id')
                    ->select('user.*', 'kelas.nama_kelas')
                    ->get();
    }
}
