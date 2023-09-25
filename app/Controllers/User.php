<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    private $ModelUser;

    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function index()
    {
        return view('backend/user/v_user', [
            'title' => 'Users',
            'data'  => $this->ModelUser->findAll()
        ]);
    }

    public function add()
    {
        $validate = $this->validate([
            'nama'      => 'required',
            'username'  => 'required|is_unique[users.username]|regex_match[/^[a-zA-Z0-9_]+$/]',
            'password'  => 'required|min_length[3]',
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $this->ModelUser->insert($this->request->getPost());
        return redirect()->to(base_url('users'))->with('pesan', 'User berhasil ditambahkan.');
    }

    public function edit($id_user)
    {
        $validate = $this->validate([
            'nama'      => 'required',
            'username'  => 'required|regex_match[/^[a-zA-Z0-9_]+$/]',
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        if ($this->request->getPost('password') == '') {
            $data = [
                'nama'  => $this->request->getPost('nama'),
                'username'  => $this->request->getPost('username'),
            ];
            $this->ModelUser->update($id_user, $data);
        } else {
            $this->ModelUser->update($id_user, $this->request->getPost());
        }
        return redirect()->to(base_url('users'))->with('pesan', 'User berhasil diedit.');
    }

    public function delete($id_user)
    {
        if (!$this->ModelUser->find($id_user)) {
            return redirect()->back()->with('error', 'User Tidak Ditemukan.');
        }
        $this->ModelUser->delete($id_user);
        return redirect()->to(base_url('users'))->with('pesan', 'User berhasil dihapus.');
    }
}
