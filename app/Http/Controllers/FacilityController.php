<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Facility',
            // 'facilities' => Facility::all()
            'facilities' => Facility::paginate(7)
            // 'facilities' => Facility::paginate(5)->withQueryString()
        ];
        // dd($data);
        return view('modules.facility.index', $data);
    }

    public function addFacility()
    {
        $data = [
            'title' => 'Add Facility',
            'facilities' => Facility::all()
        ];
        return view('admin.addFacilityPage.index', $data);
    }
}
