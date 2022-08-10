<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParty_TransactionRequest;
use App\Http\Requests\UpdateParty_TransactionRequest;
use App\Models\Party_Transaction;

class PartyTransactionController extends Controller
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
     * @param  \App\Http\Requests\StoreParty_TransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParty_TransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Party_Transaction  $party_Transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Party_Transaction $party_Transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Party_Transaction  $party_Transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Party_Transaction $party_Transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParty_TransactionRequest  $request
     * @param  \App\Models\Party_Transaction  $party_Transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParty_TransactionRequest $request, Party_Transaction $party_Transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Party_Transaction  $party_Transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party_Transaction $party_Transaction)
    {
        //
    }
}
