<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class cancellationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'CancellationPage',
            'cancelation' => Pemesanan::where('status', "Canceled")->get()
        ];
        // dd($data);
        return view('admin.cancellationPage.index', $data);
    }
}
