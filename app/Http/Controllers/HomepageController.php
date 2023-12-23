<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Kelas;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected $facilityModel;
    protected $kelasModel;
    function __construct()
    {
        $this->facilityModel = new Facility();
        $this->kelasModel = new Kelas();
    }
    public function index()
    {
        $data = [
            'title' => 'Homepage',
            'sports' => $this->facilityModel->getByCategory(3),
            'buildings' => $this->facilityModel->getByCategory(2),
            'classes' => $this->facilityModel->getByCategory(1)
        ];
        // dd($data);
        return view('modules.homepage.index', $data);
    }
    public function fetchKelasbyFacilityId(Request $request)
    {
        $facilityId = $request->input('facility_id');
        $kelas = $this->kelasModel->getKelasbyFacilityId($facilityId);
        return response()->json($kelas);
        // return response()->json('masuk');
    }
}
