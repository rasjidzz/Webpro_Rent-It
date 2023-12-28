<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Models\RequestGedung;
use App\Models\User;

class RentController extends Controller
{
    public function index()
    {
        $data = [
            'user' => User::all(),
            'facility' => Facility::all(),
            'title' => 'Rentpage'
        ];
        return view('modules.rentpage.index', $data);
    }


    public function create()
    {
    }


}
