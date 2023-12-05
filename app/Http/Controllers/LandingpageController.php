<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('modules.landingpage.index', $data);
    }
}
