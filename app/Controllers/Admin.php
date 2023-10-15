<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAlternatif;
use App\Models\ModelAlternatifRanking;
use App\Models\ModelKriteria;
use App\Models\ModelUser;

class Admin extends BaseController
{
    private $ModelKriteria, $ModelAlternatif, $ModelUser, $ModelAlternatifRanking;
    public function __construct()
    {
        $this->ModelKriteria = new ModelKriteria();
        $this->ModelAlternatif = new ModelAlternatif();
        $this->ModelUser = new ModelUser();
        $this->ModelAlternatifRanking = new ModelAlternatifRanking();
    }

    public function index()
    {
        // $builder = $this->ModelAlternatifRanking;
        // $builder->distinct();
        // $builder->select('id_user');
        // $query = $builder->get();
        $tes = $this->ModelAlternatifRanking->distinct()->select('id_user')->countAllResults();
        return view('backend/v_dashboard', [
            'title'         => 'Dashboard',
            'kriteria'      => $this->ModelKriteria->countAllResults(),
            'alternatif'    => $this->ModelAlternatif->countAllResults(),
            'user'          => $this->ModelUser->countAllResults(),
            'pemakai'       => $this->ModelAlternatifRanking->distinct()->select('id_user')->countAllResults()
        ]);
    }
}
