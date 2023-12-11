<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected $facilityModel;
    function __construct()
    {
        $this->facilityModel = new Facility();
    }
    public function index()
    {
        $data = [
            'title' => 'Homepage',
            'sports' => $this->facilityModel->getByCategory('sports'),
            'buildings' => $this->facilityModel->getByCategory('buildings'),
            'classes' => $this->facilityModel->getByCategory('classes')
        ];
        // dd($data);
        return view('modules.homepage.index', $data);
    }
}
