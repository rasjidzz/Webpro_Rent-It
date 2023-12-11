<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Reservasi'
        ];
        return view('admin.submissionPage.index', $data);
    }
}
