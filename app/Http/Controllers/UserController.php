<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;


class UserController extends Controller {

    public $kelasModel;
    public $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function create() {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];
        return view('create_user', $data);
    }

    public function store(Request $req) {
        $this->userModel->create([
            'nama' => $req->input('nama'),
            'nim' => $req->input('npm'),
            'kelas_id' => $req->input('kelas_id'),
        ]);
        return redirect()->to('/users');
    }

    public function index() {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }
}
