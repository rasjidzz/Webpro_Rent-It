<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin.adminPage.index', $data);
    }
}
