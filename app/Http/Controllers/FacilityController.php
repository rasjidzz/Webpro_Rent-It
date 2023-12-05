<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Facility'
        ];
        return view('modules.facility.index', $data);
    }
}
