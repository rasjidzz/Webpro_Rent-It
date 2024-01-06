<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Facility;
use App\Models\Kerusakan;
use Illuminate\Http\Request;

class LaporankerusakanpageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Laporankerusakanpage',
            'pemesanans' => Pemesanan::where('status', 'Completed')->get()
        ];
        // dd($data);
        return view('modules.laporankerusakanpage.index', $data);
    }

    public function getFacilityInfo(Request $request)
    {
        $facilityId = $request->input('facility_id');

        // return response()->json($facilityId);
        $facility = Facility::find($facilityId);

        if (!$facility) {
            return response()->json(['error' => 'Facility not found'], 404);
        }

        $images = explode(', ', $facility->image);
        $facilityData = [
            'id' => $facility->id,
            'name' => $facility->name,
            'slug' => $facility->slug,
            'price' => $facility->price,
            'image' => $images[0],
        ];

        return response()->json($facilityData);
    }

    public function getPemesananInfo(Request $request){
        $pemesananId = $request->input('pemesanan_id');
        $pemesanan = Pemesanan::find($pemesananId);
        // return response()->json($pemesanan);

        if (!$pemesanan) {
            return response()->json(['error' => 'Facility not found'], 404);
        }
        $facilityId = $pemesanan->facility->id;
        $facility = Facility::find($facilityId);

        if (!$facility) {
            return response()->json(['error' => 'Facility not found'], 404);
        }

        $images = explode(', ', $facility->image);
        $facilityData = [
            'id' => $facility->id,
            'name' => $facility->name,
            'slug' => $facility->slug,
            'price' => $facility->price,
            'image' => $images[0],
        ];

        return response()->json($facilityData);
    }

    public function postLaporanKerusakan(Request $request){
        // Validasi form jika diperlukan
        $request->validate([
            'selectedFacility' => 'required',
            'description' => 'required',
        ]);

        $pemesananId = $request->input('selectedFacility');
        $description = $request->input('description');

        // return response()->json($description);

        // Anda perlu menyesuaikan dengan model dan relasinya
        Kerusakan::create([
            'pemesanan_id' => $pemesananId,
            'user_id' => auth()->user()->id, // Ubah ini sesuai kebutuhan
            'deskripsi' => $description,
            'status' => 'Waiting',
        ]);

        return redirect('status_pemesanan')->with('success', 'Laporan kerusakan berhasil diajukan');
    }

}
