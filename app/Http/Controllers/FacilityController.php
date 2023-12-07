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
            'facilities' => Facility::all()
            // 'facilities' => Facility::paginate(5)->withQueryString()
        ];
        // dd($data);
        return view('modules.facility.index', $data);
    }
}
