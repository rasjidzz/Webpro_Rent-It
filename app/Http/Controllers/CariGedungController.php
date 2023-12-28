<?php

namespace App\Http\Controllers;

use App\Models\CariGedung;
use App\Http\Requests\StoreCariGedungRequest;
use App\Http\Requests\UpdateCariGedungRequest;

class CariGedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCariGedungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCariGedungRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CariGedung  $cariGedung
     * @return \Illuminate\Http\Response
     */
    public function show(CariGedung $cariGedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CariGedung  $cariGedung
     * @return \Illuminate\Http\Response
     */
    public function edit(CariGedung $cariGedung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCariGedungRequest  $request
     * @param  \App\Models\CariGedung  $cariGedung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCariGedungRequest $request, CariGedung $cariGedung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CariGedung  $cariGedung
     * @return \Illuminate\Http\Response
     */
    public function destroy(CariGedung $cariGedung)
    {
        //
    }
}
