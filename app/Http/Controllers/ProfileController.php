<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    // fungsi profile dengan 3 parameter
    public function profile($nama = "", $npm = "", $kelas = "") {
        // simpan data ke array
        $data = [
            'nama'  => $nama,
            'kelas' => $kelas,
            'npm'   => $npm
        ];

        // lempar ke view profile.blade.php
        return view('profile', $data);
    }
}
