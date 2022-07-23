<?php

namespace App\Http\Controllers;

use App\Models\reservetion;
use App\Http\Requests\StorereservetionRequest;
use App\Http\Requests\UpdatereservetionRequest;

class ReservetionController extends Controller
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
     * @param  \App\Http\Requests\StorereservetionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorereservetionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservetion  $reservetion
     * @return \Illuminate\Http\Response
     */
    public function show(reservetion $reservetion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservetion  $reservetion
     * @return \Illuminate\Http\Response
     */
    public function edit(reservetion $reservetion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereservetionRequest  $request
     * @param  \App\Models\reservetion  $reservetion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereservetionRequest $request, reservetion $reservetion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservetion  $reservetion
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservetion $reservetion)
    {
        //
    }
}
