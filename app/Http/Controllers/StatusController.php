<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $daftarPemesanan = Pemesanan::where('user_id', $user->id)->paginate(5);

        $colors = [];

        foreach ($daftarPemesanan as $pemesanan) {
            $colors[$pemesanan->id] = $this->getStatusColor($pemesanan);
        }

        $data = [
            'title' => 'StatusPemesanan',
            'daftarPemesanan' => $daftarPemesanan,
            'warna' => $colors,
            'waiting' => $daftarPemesanan->where('status', 'Waiting')->count(),
            'approved' => $daftarPemesanan->where('status', 'Approved')->count(),
            'denied' => $daftarPemesanan->where('status', 'Rejected')->count()
        ];

        return view('modules.orderStatusPage.index', $data);
    }

    private function getStatusColor($daftarPemesanan)
    {
        $color = '';
        if ($daftarPemesanan->status === "Approved") {
            $color = '008000';
        } elseif ($daftarPemesanan->status === "Waiting") {
            $color = 'ffa500';
        } elseif ($daftarPemesanan->status === "Rejected") {
            $color = 'ff0000';
        }
        return $color;
    }
}
