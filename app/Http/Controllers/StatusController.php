<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Status_pemesanan'
        ];
        return view('modules.orderStatusPage.index', $data);
    }
}
