<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFetishRequest;
use App\Http\Requests\UpdateFetishRequest;
use App\Models\Fetish;

class FetishController extends Controller
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
     * @param  \App\Http\Requests\StoreFetishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFetishRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fetish  $fetish
     * @return \Illuminate\Http\Response
     */
    public function show(Fetish $fetish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fetish  $fetish
     * @return \Illuminate\Http\Response
     */
    public function edit(Fetish $fetish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFetishRequest  $request
     * @param  \App\Models\Fetish  $fetish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFetishRequest $request, Fetish $fetish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fetish  $fetish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fetish $fetish)
    {
        //
    }
}
