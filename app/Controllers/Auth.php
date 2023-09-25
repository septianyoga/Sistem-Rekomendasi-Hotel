<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Auth extends BaseController
{
    private $ModelUser;
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function index()
    {
        return view('auth/v_login', [
            'title' => 'Login'
        ]);
    }

    public function prosesLogin()
    {
        // dd($this->request->getPost());
        $validate = $this->validate([
            'username'      => 'required',
            'password'      => 'required',
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
        $cek_data = $this->ModelUser->where([
            'username'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('password')
        ])->first();

        if ($cek_data) {
            session()->set('id_user', $cek_data['id_user']);
            session()->set('nama_user', $cek_data['nama']);
            session()->set('username', $cek_data['username']);
            return redirect()->to(base_url('admin'));
        }
        return redirect()->back()->with('error', 'Username atau Password Salah!');
    }

    public function logout()
    {
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('username');
        return redirect()->to(base_url('auth'));
    }
}
