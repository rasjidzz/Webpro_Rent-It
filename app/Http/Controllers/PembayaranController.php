<?php

namespace App\Http\Controllers;

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

    // public function book(Request $request)
    // {
    //     // Retrieve file information from the session
    //     $fileInfo = $request->session()->get('file');

    //     $facilityId = $request->input('facility_id');
    //     $user_id = $request->input('user_id');
    //     $tanggalSewa = $request->input('tanggalSewa');
    //     $nama = $request->input('nama');
    //     $nim = $request->input('nim');
    //     $email = $request->input('email');
    //     $noTel = $request->input('noTel');
    //     $file = $fileInfo['file'];


    //     $destinationPath = $fileInfo['destinationPath'];
    //     $originalName = $fileInfo['originalName'];
    //     $file->move($destinationPath, $originalName);

    //     $requestGedung = RequestGedung::create([
    //         'facility_id' => $facilityId,
    //         'user_id' => $user_id,
    //         'tanggal' => $tanggalSewa,
    //         'nama_file' => $originalName,
    //         'file_path' => $destinationPath,
    //         'nomor_tlp' => $noTel,
    //     ]);

    //     // Remove the file information from the session
    //     $request->session()->forget('file');

    //     return redirect('/homepage');
    // }
}
