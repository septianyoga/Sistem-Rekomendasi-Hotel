<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKriteria;

class Kriteria extends BaseController
{
    private $ModelKriteria;

    public function __construct()
    {
        $this->ModelKriteria = new ModelKriteria();
    }

    public function index()
    {
        return view('backend/kriteria/v_kriteria', [
            'title' => 'Kriteria',
            'data'  => $this->ModelKriteria->orderBy('id_kriteria', 'DESC')->findAll()
        ]);
    }

    public function add()
    {
        $validate = $this->validate([
            'nama_kriteria'      => 'required',
            'tipe'      => 'required',
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $this->ModelKriteria->insert($this->request->getPost());
        return redirect()->to(base_url('kriteria'))->with('pesan', 'Kriteria berhasil ditambahkan.');
    }

    public function edit($id_kriteria)
    {
        $validate = $this->validate([
            'nama_kriteria'      => 'required',
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $this->ModelKriteria->update($id_kriteria, $this->request->getPost());
        return redirect()->to(base_url('kriteria'))->with('pesan', 'Kriteria berhasil diedit.');
    }

    public function delete($id_kriteria)
    {
        if (!$this->ModelKriteria->find($id_kriteria)) {
            return redirect()->back()->with('error', 'User Tidak Ditemukan.');
        }
        $this->ModelKriteria->delete($id_kriteria);
        return redirect()->to(base_url('kriteria'))->with('pesan', 'User berhasil dihapus.');
    }
}
