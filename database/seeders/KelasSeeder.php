<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $kelasList = ['A', 'B', 'C', 'D'];

        foreach ($kelasList as $k) {
            Kelas::create([
                'nama_kelas' => $k
            ]);
        }
    }
}
