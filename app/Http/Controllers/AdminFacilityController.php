<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Facility;
use Illuminate\Http\Request;

class AdminFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Add Facility',
            'facilities' => Facility::all()
        ];
        // var_dump($data);
        return view('admin.addFacilityPage.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Add Facility',
            'categories' => Category::all()
        ];
        return view('admin.addFacilityPage.addfacility', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // Without Foto
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'slug' => 'required|unique:facilities',
        //     'category_id' => 'required',
        //     'harga' => 'required',
        //     'description' => 'required'
        // ]);

        // // print_r($validatedData);
        // Facility::create($validatedData);
        // return redirect('/admin/facility')->with('success', 'New Post has been added !');

        // With Foto
        // ddd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:facilities',
            'category_id' => 'required',
            'harga' => 'required',
            'description' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Aturan validasi untuk file gambar
        ]);

        $imagePaths = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $image) {
                // Ambil slug dari data yang sudah divalidasi
                $slug = $validatedData['slug'];

                // Buat nama file dengan menggabungkan slug, sufiks, dan timestamp
                $imageName = $slug . '-' . ($index + 1) . '.' . $image->getClientOriginalExtension();

                // Simpan file ke penyimpanan yang diinginkan (dalam contoh ini, 'public/assets/fasilitas')
                $imagePaths[] = $image->storeAs('Fasilitas', $imageName, 'public');
            }
        }

        // Mengubah array imagePaths menjadi string dengan koma sebagai pemisah
        $validatedData['image'] = implode(', ', $imagePaths);

        Facility::create($validatedData);
        return redirect('/admin/facility')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        //
    }
}
