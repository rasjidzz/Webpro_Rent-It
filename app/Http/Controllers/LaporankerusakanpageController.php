<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Facility;

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
        // Gantilah dengan logika untuk mendapatkan data fasilitas dari database
        $facility = Facility::find($facilityId);

        if (!$facility) {
            // Atau handle jika fasilitas tidak ditemukan
            return response()->json(['error' => 'Facility not found'], 404);
        }

        $facilityData = [
            'id' => $facility->id,
            'name' => $facility->name,
            'price' => $facility->price,
            'image' => $facility->image,
        ];

        return response()->json($facilityData);
    }

}
