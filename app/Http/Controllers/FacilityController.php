<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        if ((Facility::count() - 5) < 2) {
            $data = [
                'title' => 'Facility',
                'facilities' => Facility::paginate(Facility::count()),
            ];
        } else {
            $data = [
                'title' => 'Facility',
                'facilities' => Facility::paginate(5),
            ];
        }
        // dd($data);
        return view('modules.facility.index', $data);
    }
}
