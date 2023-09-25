<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perbandingan extends BaseController
{
    public function index()
    {
        return view('frontend/v_perbandingan', [
            'title' => 'Perbandingan'
        ]);
    }
}
