<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopUpController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'TopUp'
        ];
        return view('modules.topup.index', $data);
    }
}
