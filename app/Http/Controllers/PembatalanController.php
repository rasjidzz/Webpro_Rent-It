<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembatalanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pembatalanpage'
        ];
        return view('modules.pembatalanpage.index', $data);
    }

    public function index2()
    {
        $data = [
            'title' => 'Pembatalanpage2'
        ];
        return view('modules.pembatalanpage2.index', $data);
    }
}
