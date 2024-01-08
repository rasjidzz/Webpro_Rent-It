<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class historyController extends Controller
{
    protected $pemesananModel;
    public function __construct()
    {
        $this->pemesananModel = new Pemesanan();
    }

    public function index()
    {
        $data = [
            'title' => 'HistoryPage',
            'history' => $this->pemesananModel->getApprovedRejectedCompletedActive()
        ];

        return view('admin.historyPage.index', $data);
    }
}
