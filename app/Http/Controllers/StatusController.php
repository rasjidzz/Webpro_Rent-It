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
            'waiting' => Pemesanan::where('user_id', $user->id)->where('status', 'Waiting')->count(),
            'approved' => Pemesanan::where('user_id', $user->id)->where('status', 'Approved')->count(),
            'denied' => Pemesanan::where('user_id', $user->id)->where('status', 'Rejected')->count(),
            'active' => Pemesanan::where('user_id', $user->id)->where('status', 'Active')->count(),
            'completed' => Pemesanan::where('user_id', $user->id)->where('status', 'Completed')->count(),
            'canceled' => Pemesanan::where('user_id', $user->id)->where('status', 'Canceled')->count()
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
        }elseif($daftarPemesanan->status === "Active"){
            $color = '006400';
        }elseif($daftarPemesanan->status === "Completed"){
            $color = '000080';
        }elseif($daftarPemesanan->status === "Canceled"){
            $color = 'ff0000';
        }
        return $color;
    }
    public function getPemesananDetail(Request $request){
        $pesanan_id = $request->input('pesanan_ID');
        $pemesanan = Pemesanan::find($pesanan_id);
        $reason = $pemesanan->note;
        return response()->json($reason);

    }
}
