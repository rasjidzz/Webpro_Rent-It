<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class declinedController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'DeclinedPage'
        ];
        return view('admin.declinedPage.index', $data);
    }
}
