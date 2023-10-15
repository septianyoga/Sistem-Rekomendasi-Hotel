<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelIndexRasio;
use App\Models\ModelKriteria;
use App\Models\ModelKriteriaBobot;
use App\Models\ModelKriteriaPerbandingan;

class Kriteria extends BaseController
{
    private $ModelKriteria, $ModelKriteriaPerbandingan, $ModelKriteriaBobot, $ModelIndexRasio;

    public function __construct()
    {
        $this->ModelKriteria = new ModelKriteria();
        $this->ModelKriteriaPerbandingan = new ModelKriteriaPerbandingan();
        $this->ModelKriteriaBobot = new ModelKriteriaBobot();
        $this->ModelIndexRasio = new ModelIndexRasio();
    }

    public function index()
    {
        // echo '<pre>';
        // var_dump($this->ModelKriteriaPerbandingan->findAll());
        // echo '</pre>';
        // die();
        return view('backend/kriteria/v_kriteria', [
            'title'                 =>  'Kriteria',
            'data'                  =>  $this->ModelKriteria->findAll(),
            'jumlah'                =>  $this->ModelKriteria->countAllResults(),
            'kriteria_perbandingan' =>  $this->ModelKriteriaPerbandingan->findAll(),
            'perbandingan'          => [
                '1. Sama penting',
                '2. Mendekati sedikit lebih penting',
                '3. Sedikit lebih penting',
                '4. Mendekati lebih penting',
                '5. Lebih penting',
                '6. Mendekati jelas lebih penting',
                '7. Jelas lebih penting',
                '8. Mendekati mutlak penting',
                '9. Mutlak penting'
            ]
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

    public function kriteriaPerbandingan()
    {
        $jumlah = $this->ModelKriteria->countAllResults();
        $kriteria = $this->ModelKriteria->findAll();

        $urut = 0;
        $matriks = [];

        for ($x = 0; $x <= ($jumlah - 2); $x++) {
            for ($y = ($x + 1); $y <= ($jumlah - 1); $y++) {
                $urut++;
                $perbandingan = $this->request->getPost('perbandingan' . $urut);
                $nilai = $this->request->getPost('nilai' . $urut);
                if ($perbandingan == 1) {
                    $matriks[$x][$y] = $nilai;
                    $matriks[$y][$x] = 1 / $nilai;
                } else {
                    $matriks[$x][$y] = 1 / $nilai;
                    $matriks[$y][$x] = $nilai;
                }
                $id_kriteria1 = $kriteria[$x]['id_kriteria'];
                $id_kriteria2 = $kriteria[$y]['id_kriteria'];

                $cek_perbandingan = $this->ModelKriteriaPerbandingan->where([
                    'id_kriteria1'  => $id_kriteria1,
                    'id_kriteria2'  => $id_kriteria2
                ])->first();
                $data = [
                    'id_kriteria1'  => $id_kriteria1,
                    'id_kriteria2'  => $id_kriteria2,
                    'nilai'         =>  $matriks[$x][$y]
                ];
                if ($cek_perbandingan) {
                    $this->ModelKriteriaPerbandingan->update($cek_perbandingan['id_kriteria_perbandingan'], $data);
                } else {
                    $this->ModelKriteriaPerbandingan->insert($data);
                }
            }
        }
        // isi diagonal matriks dg nilai 1
        for ($i = 0; $i <= ($jumlah - 1); $i++) {
            $matriks[$i][$i] = 1;
        }

        // jumlahkan nilai setiap kolom
        $jumlah_kolom = [];
        for ($kolom = 0; $kolom <= ($jumlah - 1); $kolom++) {
            $jumlah_kolom[$kolom] = 0;
        }
        // echo '<pre>';
        // var_dump($jumlah_kolom);
        // echo '</pre>';
        // die();

        for ($x = 0; $x <= ($jumlah - 1); $x++) {
            for ($y = 0; $y <= ($jumlah - 1); $y++) {
                $jumlah_kolom[$x] += $matriks[$y][$x];
            }
        }

        // buat matriks eigen vektor dg menjumlahkan setiap nilai matriks dg jumlah kolomnya
        $matriks_eigen_vektor = [];

        for ($x = 0; $x <= ($jumlah - 1); $x++) {
            for ($y = 0; $y <= ($jumlah - 1); $y++) {
                $matriks_eigen_vektor[$y][$x] = $matriks[$y][$x] / $jumlah_kolom[$x];
            }
        }

        // jumlahkan nilai setiap matriks matriks eigen vektor
        $jumlah_baris = [];
        for ($baris = 0; $baris <= ($jumlah - 1); $baris++) {
            $jumlah_baris[$baris] = 0;
        }

        for ($x = 0; $x <= ($jumlah - 1); $x++) {
            for ($y = 0; $y <= ($jumlah - 1); $y++) {
                $jumlah_baris[$x] += $matriks_eigen_vektor[$x][$y];
            }
        }

        // hitung jumlah dari jumlah baris matriks eigen vektor
        $jb = 0;

        foreach ($jumlah_baris as $a) {
            $jb += $a;
        }

        // hitung nilai bobot kriteria
        $bobot_kriteria = [];

        for ($x = 0; $x <= ($jumlah - 1); $x++) {
            $bobot_kriteria[$x] = $jumlah_baris[$x] / $jb;
        }
        // input nilai bobot kriteria ke database
        for ($x = 0; $x <= ($jumlah - 1); $x++) {

            $id_kriteria = $kriteria[$x]['id_kriteria'];

            // apakah nilai bobot dari setiap kriteria yang dihitung sudah ada di database ?
            // jika belum, maka input baris baru
            // jika sudah, maka update nilainya

            // $result = mysqli_query($kon, "SELECT * FROM kriteria_bobot WHERE id_kriteria = $id_kriteria");

            // if (mysqli_num_rows($result) == 0) {
            //     $query = "INSERT INTO kriteria_bobot VALUES ('$id_kriteria','" . $bobot_kriteria[$x] . "')";
            // } else {
            //     $query = "UPDATE kriteria_bobot SET nilai = '" . $bobot_kriteria[$x] . "' WHERE id_kriteria = $id_kriteria[$x]";
            // }

            // mysqli_query($kon, $query);
            $cek_kriteria_bobot = $this->ModelKriteriaBobot->find($id_kriteria);
            $data_bobot = [
                'id_kriteria'   => $id_kriteria,
                'nilai'         => $bobot_kriteria[$x]
            ];
            if ($cek_kriteria_bobot) {
                $this->ModelKriteriaBobot->update($id_kriteria, $data_bobot);
            } else {
                $this->ModelKriteriaBobot->insert($data_bobot);
            }
        }

        // Cek Konsistensi Nilai Perbandingan

        // hitung jumlah dari nilai bobot kriteria
        $bk = 0;

        foreach ($bobot_kriteria as $a) {
            $bk += $a;
        }

        // hitung lambda max
        $lambda_max = ($jb + $bk) / $jumlah;

        // hitung index konsistensi
        $ci = ($lambda_max - $jumlah) / ($jumlah - 1);

        // ambil rasio index
        $result = $this->ModelIndexRasio->find($jumlah);
        $ir = $result['nilai'];

        // hitung nilai rasio konsitensi
        $cr = $ci / $ir;
        // return redirect()->to(base_url('kriteria'))->with('pesan', 'Kriteria Perbandingan Berhasil Ditambahkan.');
        return view('backend/kriteria/v_hasil_kriteria', [
            'title'                 => 'Hasil Perbandingan Kriteria',
            'jumlah'                => $jumlah,
            'kriteria'              => $kriteria,
            'matriks'               => $matriks,
            'matriks_eigen_vektor'  => $matriks_eigen_vektor,
            'jumlah_baris'          => $jumlah_baris,
            'bobot_kriteria'        => $bobot_kriteria,
            'lambda_max'            => $lambda_max,
            'ci'                    => $ci,
            'cr'                    => $cr,
        ]);
    }
}
