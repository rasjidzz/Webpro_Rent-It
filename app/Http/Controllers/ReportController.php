<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Lapor_kerusakan'
        ];
        return view('admin.reportPage.index', $data);
    }
}
