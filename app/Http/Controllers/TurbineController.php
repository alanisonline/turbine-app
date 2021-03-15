<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turbine;

class TurbineController extends Controller
{
    public function getReport() {
        $turbine = new Turbine();
        return $turbine->getReport();
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function show(Turbine $turbine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function edit(Turbine $turbine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turbine $turbine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turbine  $turbine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turbine $turbine)
    {
        //
    }
}
