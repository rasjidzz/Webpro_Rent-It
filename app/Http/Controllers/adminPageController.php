<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminPageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'AdminPage'
        ];
        return view('admin.adminPage.index', $data);
    }
}
