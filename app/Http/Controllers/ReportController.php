<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'LaporKerusakan'
        ];
        return view('admin.reportPage.index', $data);
    }
}
