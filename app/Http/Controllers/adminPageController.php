<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class adminPageController extends Controller
{
    protected $pemesananModel;
    public function __construct()
    {
        $this->pemesananModel = new Pemesanan();
        $this->middleware('admin');
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'countSubmission' => $this->pemesananModel->countTotal('submission'),
            'countHistory' => $this->pemesananModel->countTotal('history'),
            'countDamage' => 10,
            'countCancel' => 5,
        ];
        return view('admin.adminPage.index', $data);
    }
}
