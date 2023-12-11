<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pembayaran'
        ];
        return view('modules.pembayaran1.index', $data);
    }
}
