<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbout_UsRequest;
use App\Http\Requests\UpdateAbout_UsRequest;
use App\Models\About_Us;

class AboutUsController extends Controller
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
     * @param  \App\Http\Requests\StoreAbout_UsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbout_UsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About_Us  $about_Us
     * @return \Illuminate\Http\Response
     */
    public function show(About_Us $about_Us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About_Us  $about_Us
     * @return \Illuminate\Http\Response
     */
    public function edit(About_Us $about_Us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbout_UsRequest  $request
     * @param  \App\Models\About_Us  $about_Us
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbout_UsRequest $request, About_Us $about_Us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About_Us  $about_Us
     * @return \Illuminate\Http\Response
     */
    public function destroy(About_Us $about_Us)
    {
        //
    }
}
