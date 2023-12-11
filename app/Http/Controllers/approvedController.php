<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class approvedController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'ApprovedPage'
        ];
        return view('admin.approvedPage.index', $data);
    }
}
