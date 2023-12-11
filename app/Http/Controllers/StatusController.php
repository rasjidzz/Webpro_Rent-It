<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'StatusPemesanan'
        ];
        return view('modules.orderStatusPage.index', $data);
    }
}
