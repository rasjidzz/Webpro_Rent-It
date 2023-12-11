<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'reservasi'
        ];
        return view('admin.submissionPage.index', $data);
    }
}
