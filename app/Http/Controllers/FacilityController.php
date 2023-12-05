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
        ];
        // dd($data);
        return view('modules.facility.index', $data);
    }
}
