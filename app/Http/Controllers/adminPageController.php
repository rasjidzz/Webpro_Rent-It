<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Models\KelasPemesanan;

class adminPageController extends Controller
{
    protected $pemesananModel;
    protected $kerusakanModel;
    public function __construct()
    {
        $this->pemesananModel = new Pemesanan();
        $this->kerusakanModel = new Kerusakan();
        $this->middleware('admin');
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'countSubmission' => $this->pemesananModel->countTotal('submission') + KelasPemesanan::where('status', 'Waiting')->count(),
            'countHistory' => $this->pemesananModel->countTotal('history'),
            'countDamage' => $this->kerusakanModel->where('status', 'Waiting')->count(),
            'countCancel' => $this->pemesananModel->countTotal('cancel'),
        ];
        return view('admin.adminPage.index', $data);
    }
}
