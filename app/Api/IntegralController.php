<?php

namespace App\Api;

use App\Http\Controllers\Controller;
use App\Models\Integral;
use App\Http\Requests\StoreIntegralRequest;
use App\Http\Requests\UpdateIntegralRequest;

class IntegralController extends Controller
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
     * @param  \App\Http\Requests\StoreIntegralRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIntegralRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Integral  $integral
     * @return \Illuminate\Http\Response
     */
    public function show(Integral $integral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Integral  $integral
     * @return \Illuminate\Http\Response
     */
    public function edit(Integral $integral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntegralRequest  $request
     * @param  \App\Models\Integral  $integral
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntegralRequest $request, Integral $integral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Integral  $integral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integral $integral)
    {
        //
    }
}
