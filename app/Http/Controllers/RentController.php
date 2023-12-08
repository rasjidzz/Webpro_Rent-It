<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Rentpage'
        ];
        return view('modules.rentpage.index', $data);
    }
}
