<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAlternatif;
use App\Models\ModelAlternatifBobot;
use App\Models\ModelAlternatifDeskripsi;
use App\Models\ModelAlternatifPerbandingan;
use App\Models\ModelAlternatifPilihan;
use App\Models\ModelAlternatifRanking;
use App\Models\ModelIndexRasio;
use App\Models\ModelKriteria;
use App\Models\ModelKriteriaBobot;

class Perbandingan extends BaseController
{
    private $ModelKriteria, $ModelAlternatif, $ModelAlternatifDeskripsi, $ModelAlternatifPilihan, $ModelAlternatifPerbandingan, $ModelAlternatifBobot, $ModelIndexRasio, $ModelKriteriaBobot, $ModelAlternatifRanking;

    public function __construct()
    {
        $this->ModelKriteria = new ModelKriteria();
        $this->ModelKriteriaBobot = new ModelKriteriaBobot();
        $this->ModelAlternatif = new ModelAlternatif();
        $this->ModelAlternatifDeskripsi = new ModelAlternatifDeskripsi();
        $this->ModelAlternatifPilihan = new ModelAlternatifPilihan();
        $this->ModelAlternatifPerbandingan = new ModelAlternatifPerbandingan();
        $this->ModelAlternatifBobot = new ModelAlternatifBobot();
        $this->ModelIndexRasio = new ModelIndexRasio();
        $this->ModelAlternatifRanking = new ModelAlternatifRanking();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        return view('frontend/v_perbandingan', [
            'title' => 'Perbandingan',
            'data'  => $this->ModelKriteria->findAll(),
            'alternatif'    => $this->ModelAlternatif->findAll(),
            'deskripsi_alternatif'  => $this->ModelAlternatifDeskripsi->join('kriteria', 'alternatif_deskripsi.id_kriteria = kriteria.id_kriteria')->findAll()
        ]);
    }

    public function input_perbandingan()
    {
        // cek jika user hanya memilih 1 alternatif saja
        if ($this->request->getPost('alternatif') == null || count($this->request->getPost('alternatif')) <= 1) {
            return redirect()->back()->with('alert', 'Minimal Harus Memilih 2 Alternatif Perbandingan!.');
        };

        // insert alternatif pilihan
        $id_user_random = rand() . '_' . date('d-m-Y-H:i');
        foreach ($this->request->getPost('alternatif') as $value) {
            $this->ModelAlternatifPilihan->insert(['id_alternatif'  => $value, 'id_user' => $id_user_random]);
        }
        return redirect()->to(base_url('input_perbandingan/' . $id_user_random . '/0'));
        // dd($this->request->getPost('alternatif'));
    }

    public function proses_perbandingan($id_user_random, $urutan_kriteria)
    {
        // dd($this->ModelKriteria->limit(1, $urutan_kriteria)->find());
        // dd($this->ModelAlternatif->join('alternatif_pilihan', 'alternatif.id_alternatif = alternatif_pilihan.id_alternatif')->findAll());
        return view('frontend/v_proses_perbandingan', [
            'title' => 'Proses Perbandingan',
            'data'  => $this->ModelKriteria->findAll(),
            'id_user'   => $id_user_random,
            'urutan'    => $urutan_kriteria,
            'jumlah'    => $this->ModelAlternatifPilihan->where('id_user', $id_user_random)->countAllResults(),
            'kriteria'  => $this->ModelKriteria->limit(1, $urutan_kriteria)->find(),
            'alternatif'    => $this->ModelAlternatif->join('alternatif_pilihan', 'alternatif.id_alternatif = alternatif_pilihan.id_alternatif')->where('alternatif_pilihan.id_user', $id_user_random)->findAll(),
            'deskripsi_alternatif'  => $this->ModelAlternatifDeskripsi->join('kriteria', 'alternatif_deskripsi.id_kriteria = kriteria.id_kriteria')->join('alternatif_pilihan', 'alternatif_deskripsi.id_alternatif = alternatif_pilihan.id_alternatif')->where('alternatif_pilihan.id_user', $id_user_random)->findAll(),
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

    public function insert_alternatif()
    {
        $jumlah = $this->ModelAlternatifPilihan->where('id_user', $this->request->getPost('id_user'))->countAllResults();
        $alternatif = $this->ModelAlternatif->join('alternatif_pilihan', 'alternatif.id_alternatif = alternatif_pilihan.id_alternatif')->where('id_user', $this->request->getPost('id_user'))->findAll();


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
                $id_alternatif1 = $alternatif[$x]['id_alternatif'];
                $id_alternatif2 = $alternatif[$y]['id_alternatif'];

                $data = [
                    'id_alternatif1'    => $id_alternatif1,
                    'id_alternatif2'    => $id_alternatif2,
                    'id_kriteria'       =>  $this->request->getPost('id_kriteria'),
                    'nilai'             =>  $matriks[$x][$y],
                    'id_user'           => $this->request->getPost('id_user')
                ];
                // dd($data);
                $this->ModelAlternatifPerbandingan->insert($data);
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
        $bobot_alternatif = [];

        for ($x = 0; $x <= ($jumlah - 1); $x++) {
            $bobot_alternatif[$x] = $jumlah_baris[$x] / $jb;
        }
        // input nilai bobot kriteria ke database
        for ($x = 0; $x <= ($jumlah - 1); $x++) {

            $id_alternatif = $alternatif[$x]['id_alternatif'];

            // apakah nilai bobot dari setiap kriteria yang dihitung sudah ada di database ?
            // jika belum, maka input baris baru
            // jika sudah, maka update nilainya

            // $result = mysqli_query($kon, "SELECT * FROM kriteria_bobot WHERE id_kriteria = $id_kriteria");

            // if (mysqli_num_rows($result) == 0) {
            //     $query = "INSERT INTO kriteria_bobot VALUES ('$id_kriteria','" . $bobot_alternatif[$x] . "')";
            // } else {
            //     $query = "UPDATE kriteria_bobot SET nilai = '" . $bobot_alternatif[$x] . "' WHERE id_kriteria = $id_kriteria[$x]";
            // }

            // mysqli_query($kon, $query);
            $data_bobot = [
                'id_alternatif' => $id_alternatif,
                'id_kriteria'   => $this->request->getPost('id_kriteria'),
                'nilai'         => $bobot_alternatif[$x],
                'id_user'       => $this->request->getPost('id_user')
            ];
            $this->ModelAlternatifBobot->insert($data_bobot);
        }

        // Cek Konsistensi Nilai Perbandingan

        // hitung jumlah dari nilai bobot kriteria
        $bk = 0;

        foreach ($bobot_alternatif as $a) {
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
        // // return redirect()->to(base_url('kriteria'))->with('pesan', 'Kriteria Perbandingan Berhasil Ditambahkan.');
        // return view('backend/kriteria/v_hasil_kriteria', [
        //     'title'                 => 'Hasil Perbandingan Kriteria',
        //     'jumlah'                => $jumlah,
        //     'kriteria'              => $alternatif,
        //     'matriks'               => $matriks,
        //     'matriks_eigen_vektor'  => $matriks_eigen_vektor,
        //     'jumlah_baris'          => $jumlah_baris,
        //     'bobot_alternatif'      => $bobot_alternatif,
        //     'lambda_max'            => $lambda_max,
        //     'ci'                    => $ci,
        //     'cr'                    => $cr,
        // ]);
        $jumlah_kriteria = $this->ModelKriteria->countAllResults();
        $batas_perulangan_perbandingan = $jumlah_kriteria - 1;
        if ($this->request->getPost('urutan') == $batas_perulangan_perbandingan) {
            return redirect()->to(base_url('hasil/' . $this->request->getPost('id_user')));
            // echo 'selesai';
            // die();
            // return view('frontend/v_hasil_perbandingan', [
            //     'title' => 'Hasil Perbandingan Alternatif',
            //     'jumlah'                => $jumlah,
            //     'kriteria'              => $alternatif,
            //     'matriks'               => $matriks,
            //     'matriks_eigen_vektor'  => $matriks_eigen_vektor,
            //     'jumlah_baris'          => $jumlah_baris,
            //     'bobot_alternatif'      => $bobot_alternatif,
            //     'lambda_max'            => $lambda_max,
            //     'ci'                    => $ci,
            //     'cr'                    => $cr,
            // ]);
            // $nilai = [];
            // $kriteria = $this->ModelKriteria->findAll();
            // $jumlah_kriteria = $this->ModelKriteria->countAllResults();

            // for ($x = 0; $x <= ($jumlah - 1); $x++) {

            //     $nilai[$x] = 0;

            //     for ($y = 0; $y <= ($jumlah_kriteria - 1); $y++) {

            //         $id_alternatif = $alternatif[$x]['id_alternatif'];
            //         $id_kriteria = $kriteria[$y]['id_kriteria'];

            //         // cari bobot alternatif
            //         $query = $this->ModelAlternatifBobot->where([
            //             'id_alternatif' => $id_alternatif,
            //             'id_kriteria'   => $id_kriteria,
            //             'id_user'       => $this->request->getPost('id_user')
            //         ])->first();
            //         // $bobot_alternatif[]
            //         dd($bobot_alternatif);
            //     }
            // }
        }
        $urutan = $this->request->getPost('urutan') + 1;
        return redirect()->to(base_url('/input_perbandingan/' . $this->request->getPost('id_user') . '/' . $urutan));
    }

    public function hasil($id_user)
    {
        $jumlah_alternatif = $this->ModelAlternatifPilihan->where('id_user', $id_user)->countAllResults();
        $jumlah_kriteria = $this->ModelKriteria->countAllResults();
        $alternatif = $this->ModelAlternatifPilihan->join('alternatif', 'alternatif_pilihan.id_alternatif = alternatif.id_alternatif')->where('id_user', $id_user)->findAll();
        $kriteria = $this->ModelKriteria->findAll();

        // echo '<pre>';
        // var_dump($alternatif);
        // echo '--------------';
        // var_dump($kriteria);
        // echo '</pre>';

        // $bobot_alternatif = $this->ModelAlternatifBobot->where([
        //     'id_alternatif' => 3,
        //     'id_kriteria'   => 2,
        //     'id_user'       => $id_user
        // ])->first();
        // dd($bobot_alternatif);





        $nilai = [];
        for ($x = 0; $x <= ($jumlah_alternatif - 1); $x++) {
            // 3    

            $nilai[$x] = 0;

            for ($y = 0; $y <= ($jumlah_kriteria - 1); $y++) {
                // 4

                $id_alternatif = $alternatif[$x]['id_alternatif'];
                $id_kriteria = $kriteria[$y]['id_kriteria'];

                // cari bobot alternatif
                $bobot_alternatif = $this->ModelAlternatifBobot->where([
                    'id_alternatif' => $id_alternatif,
                    'id_kriteria'   => $id_kriteria,
                    'id_user'       => $id_user
                ])->first();
                $bobot_kriteria = $this->ModelKriteriaBobot->find($id_kriteria);
                // dd($bobot_kriteria['nilai']);

                $nilai[$x] += $bobot_alternatif['nilai'] * $bobot_kriteria['nilai'];
            }
        }

        // insert / update karyawan_ranking
        if (!$this->ModelAlternatifRanking->where('id_user', $id_user)->first()) {
            for ($i = 0; $i <= ($jumlah_alternatif - 1); $i++) {

                $id_alternatif = $alternatif[$i]['id_alternatif'];

                $this->ModelAlternatifRanking->insert([
                    'id_alternatif' => $id_alternatif,
                    'nilai' => $nilai[$i],
                    'id_user'   =>  $id_user
                ]);
            }
        }

        // query kriteria
        // $bbt_kriteria = [];

        // $result = mysqli_query($kon, "SELECT nilai FROM kriteria_bobot");

        // while ($row = mysqli_fetch_assoc($result)) {
        //     $bbt_kriteria[] = $row;
        // }

        $bbt_kriteria = $this->ModelKriteriaBobot->findAll();


        // query karyawan_bobot
        $bbt_alternatif = [];

        for ($x = 0; $x <= ($jumlah_kriteria - 1); $x++) {
            for ($y = 0; $y <= ($jumlah_alternatif - 1); $y++) {

                $id_kriteria = $kriteria[$x]['id_kriteria'];
                $id_alternatif = $alternatif[$y]['id_alternatif'];

                $bobot_alternatif = $this->ModelAlternatifBobot->where([
                    'id_alternatif' => $id_alternatif,
                    'id_kriteria'   => $id_kriteria,
                    'id_user'       => $id_user
                ])->first();

                $bbt_alternatif[$x][$y] = $bobot_alternatif['nilai'];
            }
        }

        // query karywan_ranking
        $ranking = [];

        $ranking = $this->ModelAlternatifRanking->where('id_user', $id_user)->findAll();

        // siapkan bahan perangkingan
        $bahan = [];

        foreach ($ranking as $r) {
            $bahan[] = $r['nilai'];
        }

        // menentukan peringkat karyawan
        $peringkat = [];

        for ($i = 0; $i < $jumlah_alternatif; $i++) {
            $max    = max($bahan);
            $index  = array_keys($bahan, $max);
            $peringkat[$index[0]] = $i + 1;
            unset($bahan[$index[0]]);
        }

        $array = array_keys($peringkat);

        // dd($ranking);

        return view('frontend/v_hasil_perbandingan', [
            'title' => 'Hasil Perbandingan',
            'jumlah_alternatif' => $jumlah_alternatif,
            'alternatif'    => $alternatif,
            'ranking'   => $ranking,
            'array' => $array,
            'kriteria'  => $kriteria,
            'bbt_kriteria'   => $bbt_kriteria,
            'bbt_alternatif'   => $bbt_alternatif,
            'peringkat' => $peringkat,
        ]);
    }
}
