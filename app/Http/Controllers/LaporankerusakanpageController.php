<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporankerusakanpageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Laporankerusakanpage'
        ];
        return view('modules.laporankerusakanpage.index', $data);
    }


    public function index2()
    {
        $data = [
            'title' => 'Laporankerusakanpage2'
        ];
        return view('modules.laporankerusakanpage2.index', $data);
    }
    
}
