<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Kelas;
use App\Models\Pemesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected $facilityModel;
    protected $kelasModel;
    protected $pemesananModel;
    function __construct()
    {
        $this->facilityModel = new Facility();
        $this->kelasModel = new Kelas();
        $this->pemesananModel = new Pemesanan();
    }
    public function index(Request $request)
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
    }
    public function checkAvailabilityKelas(Request $request)
    {
        $gedungPerkuliahan = $request->input('gedungPerkuliahan');
        $tanggalPinjam = $request->input('tanggal_sewa');
        $kelasPerkuliahan = $request->input('kelasPerkuliahan');

        $now = Carbon::now()->toString();

        // Mengecek apakah tanggal sudah lewat
        $isValidDate = Carbon::parse($tanggalPinjam)->gte($now);

        // $data = [$gedungPerkuliahan, $tanggalPinjam, $kelasPerkuliahan, $isValidDate];
        // return response()->json($data);
        // dd($data);

        $data = [
            'gedung' => $this->facilityModel->getFacilityByID($gedungPerkuliahan),
            'kelas' => $this->kelasModel->getKelasbyId($kelasPerkuliahan),
            'title' => 'Rentpage',
            'tanggalSewa' => $tanggalPinjam
        ];
        // dd($data);
        return view('modules.rentpage.kelas', $data);
    }
    public function checkAvailability(Request $request)
    {
        $facilityId = $request->input('facility_id');
        $tanggalSewa = $request->input('tanggalSewa');

        $now = Carbon::now()->toString();

        // Mengecek apakah tanggal sudah lewat
        $isValidDate = Carbon::parse($tanggalSewa)->gte($now);
        // dd($isValidDate);
        // Mengecek apakah tanggal sudah lewat

        // Mengecek Apakah Available pada tanggal dan fasilitas yang diinput
        $facilityAvail = $this->pemesananModel->checkAvailbyDateandFacilityID($tanggalSewa, $facilityId);
        // Mengecek Apakah Available pada tanggal dan fasilitas yang diinput

        if ($isValidDate) {
            if ($facilityAvail) {
                return redirect('/homepage')->with('failed', 'Fasilitas sudah tersewa');
            } else {
                $data = [
                    'facility' => $this->facilityModel->getFacilityByID($facilityId),
                    'title' => 'Rentpage',
                    'tanggalSewa' => $tanggalSewa
                ];
                // dd($data);
                return view('modules.rentpage.index', $data);
            }
        } else {
            return redirect('/homepage')->with('failed', 'Tanggal sudah lewat');
        }
    }
}
