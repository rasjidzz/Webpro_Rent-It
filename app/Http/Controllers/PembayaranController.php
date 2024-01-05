<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Models\RequestGedung;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        $facilityId = $request->input('facility_id');
        $user_id = $request->input('user_id');
        $tanggalSewa = $request->input('tanggalSewa');
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        $email = $request->input('email');
        $noTel = $request->input('noTel');
        $file = $request->file("inputFile");

        $data = [
            'facility_id' => $facilityId,
            'user_id' => $user_id,
            'tanggalSewa' => $tanggalSewa,
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'noTel' => $noTel,
            'file' => $file,

            'title' => 'Pembayaran'
        ];


        return view('modules.konfirmasi.index', $data);
    }

    public function bayar(Request $request) {
        $hargasewa = $request->input('hargasewa');
        $pesananID = $request->input('pesanan_ID');

        $user = auth()->user();
        $wallet = $user->wallet;
        $pemesanan = Pemesanan::find($pesananID);
        // return response()->json(['status' => 'error', 'wallet' => $wallet, 'pemesanan' => $pesanan->status]);

        // Check if the user has enough balance
        if ($wallet->balance >= $hargasewa) {
            // Deduct the payment amount from the user's wallet balance
            $wallet->decrement('balance', $hargasewa);

            // Process the payment or update the database as needed

            $pemesanan->update(['status' => 'Active']);

            return response()->json(['status' => 'success', 'hargasewa' => $hargasewa, 'pesananID' => $pesananID]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Insufficient balance.']);
        }
    }
    public function completeRent(Request $request){
        $pesananID = $request->input('pesanan_ID');

        $pemesanan = Pemesanan::find($pesananID);
        $pemesanan->update(['status' => 'Completed']);

        return response()->json(['status' => 'Success', 'message' => 'Pesanan berhasil di complete']);
    }
}
