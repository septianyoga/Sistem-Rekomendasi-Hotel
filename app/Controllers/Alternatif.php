<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAlternatif;
use App\Models\ModelAlternatifDeskripsi;
use App\Models\ModelKriteria;

class Alternatif extends BaseController
{

    private $ModelAlternatif, $ModelAlternatifDeskripsi, $ModelKriteria;
    public function __construct()
    {
        $this->ModelAlternatif = new ModelAlternatif();
        $this->ModelAlternatifDeskripsi = new ModelAlternatifDeskripsi();
        $this->ModelKriteria = new ModelKriteria();
    }

    public function index()
    {
        return view('backend/alternatif/v_alternatif', [
            'title' => 'Alternatif',
            'data'  => $this->ModelAlternatif->orderBy('alternatif.id_alternatif', 'DESC')->findAll(),
            'alternatif'    => $this->ModelAlternatifDeskripsi->join('kriteria', 'alternatif_deskripsi.id_kriteria = kriteria.id_kriteria', 'left')->findAll()
        ]);
    }

    public function add()
    {
        return view('backend/alternatif/v_add_alternatif', [
            'title' => 'Tambah Alternatif',
            'kriteria'  => $this->ModelKriteria->orderBy('id_kriteria', 'DESC')->findAll(),
        ]);
    }

    public function addAlt()
    {
        $allKriteria = $this->ModelKriteria->findAll();
        $image = $this->ModelKriteria->where('tipe', 'image')->first();
        if ($image) {
            $foto = $this->request->getFile($image['id_kriteria']);
            $nama_foto = $foto->getRandomName();
            $this->ModelAlternatif->insert([
                'nama_alternatif' => $this->request->getPost('nama_alternatif'),
                'link_website' => $this->request->getPost('link_website'),
            ]);
            $dataTerakhir = $this->ModelAlternatif->orderBy('id_alternatif', 'DESC')->first();

            foreach ($allKriteria as $val) {
                $data = [
                    'id_alternatif' => $dataTerakhir['id_alternatif'],
                    'id_kriteria' => $val['id_kriteria'],
                    'value' => $val['tipe'] == 'image' ? $nama_foto : $this->request->getPost($val['id_kriteria'])
                ];
                $this->ModelAlternatifDeskripsi->insert($data);
            }
            // dd([
            //     'id_alternatif' => $dataTerakhir['id_alternatif'],
            //     'id_kriteria' => $image['id_kriteria'],
            //     'value' => $nama_foto
            // ]);
            // $this->ModelAlternatifDeskripsi->insert([
            //     'id_alternatif' => $dataTerakhir['id_alternatif'],
            //     'id_kriteria' => $image['id_kriteria'],
            //     'value' => $nama_foto
            // ]);
            $foto->move('foto_alternatif', $nama_foto);
        } else {
            $this->ModelAlternatif->insert([
                'nama_alternatif' => $this->request->getPost('nama_alternatif'),
                'link_website' => $this->request->getPost('link_website'),
            ]);
            $dataTerakhir = $this->ModelAlternatif->orderBy('id_alternatif', 'DESC')->first();
            foreach ($allKriteria as $val) {
                $data = [
                    'id_alternatif' => $dataTerakhir['id_alternatif'],
                    'id_kriteria' => $val['id_kriteria'],
                    'value' => $this->request->getPost($val['id_kriteria'])
                ];
                $this->ModelAlternatifDeskripsi->insert($data);
            }
        }
        return redirect()->to(base_url('alternatif'))->with('pesan', 'Alternatif Berhasil Ditambahkan!.');
    }

    public function delete($id_alternatif)
    {
        $alternatif = $this->ModelAlternatif->find($id_alternatif);
        if (!$alternatif) {
            return redirect()->to(base_url('alternatif'))->with('error', 'Data Alternatif Tidak Ditemukan!.');
        }
        $kriteria = $this->ModelKriteria->where('tipe', 'image')->first();
        $deskripsiAlt = $this->ModelAlternatifDeskripsi->where([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $kriteria['id_kriteria']
        ])->first();
        // dd($deskripsiAlt);
        unlink('foto_alternatif/' . $deskripsiAlt['value']);
        $this->ModelAlternatif->delete($id_alternatif);
        return redirect()->to(base_url('alternatif'))->with('pesan', 'Data Alternatif Berhasil Dihapus!.');
    }
}
