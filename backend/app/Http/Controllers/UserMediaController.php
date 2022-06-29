<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser_MediaRequest;
use App\Http\Requests\UpdateUser_MediaRequest;
use App\Models\User_Media;

class UserMediaController extends Controller
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
     * @param  \App\Http\Requests\StoreUser_MediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser_MediaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_Media  $user_Media
     * @return \Illuminate\Http\Response
     */
    public function show(User_Media $user_Media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_Media  $user_Media
     * @return \Illuminate\Http\Response
     */
    public function edit(User_Media $user_Media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_MediaRequest  $request
     * @param  \App\Models\User_Media  $user_Media
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser_MediaRequest $request, User_Media $user_Media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_Media  $user_Media
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_Media $user_Media)
    {
        //
    }
}
