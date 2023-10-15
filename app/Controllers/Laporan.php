<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAlternatifRanking;

class Laporan extends BaseController
{
    private $ModelAlternatifRanking;
    public function __construct()
    {
        $this->ModelAlternatifRanking = new ModelAlternatifRanking();
    }
    public function index()
    {
        $builder = $this->ModelAlternatifRanking;
        $builder->distinct();
        $builder->select('id_user');
        $query = $builder->get();
        // dd($query->getResultArray());
        // dd($this->ModelAlternatifRanking->DISTINCT()->findAll());
        return view('backend/laporan/v_laporan', [
            'title' => 'Laporan',
            'data'  => $query->getResultArray()
        ]);
    }
}
