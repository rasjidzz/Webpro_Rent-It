<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Facility;
class PembatalanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pembatalanpage',
            'pembatalans' => Pemesanan::where('status', 'Waiting')->get()
        ];
        return view('modules.pembatalanpage.index', $data);
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
    public function batalPesanan(Request $request)
    {
        $idPemesanan = $request->input('selectedFacility');
        $description = $request->input('description');

        Pemesanan::where('id', $idPemesanan)
            ->update(['note' => $description, 'status' => 'Canceled']);

        return redirect('/status_pemesanan')->with('success', 'Berhasil dibatalkan');
    }
}
