<?php

namespace App\Http\Controllers;

use App\Models\RequestGedung;
use App\Http\Requests\StoreRequestGedungRequest;
use App\Http\Requests\UpdateRequestGedungRequest;

class RequestGedungController extends Controller
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
     * @param  \App\Http\Requests\StoreRequestGedungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestGedungRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestGedung  $requestGedung
     * @return \Illuminate\Http\Response
     */
    public function show(RequestGedung $requestGedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestGedung  $requestGedung
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestGedung $requestGedung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestGedungRequest  $request
     * @param  \App\Models\RequestGedung  $requestGedung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestGedungRequest $request, RequestGedung $requestGedung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestGedung  $requestGedung
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestGedung $requestGedung)
    {
        //
    }
}
