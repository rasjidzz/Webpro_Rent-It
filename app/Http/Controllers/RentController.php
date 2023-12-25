<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Rentpage',
            'user' => User::all()

        ];
        return view('modules.rentpage.index', $data);
    }
}
