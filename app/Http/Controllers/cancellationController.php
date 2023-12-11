<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cancellationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'CancellationPage'
        ];
        return view('admin.cancellationPage.index', $data);
    }
}
