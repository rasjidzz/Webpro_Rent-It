<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Homepage'
        ];
        return view('modules.homepage.index', $data);
    }
}
