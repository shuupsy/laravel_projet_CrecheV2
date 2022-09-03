<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalendrierparentsRequest;
use App\Http\Requests\UpdateCalendrierparentsRequest;
use App\Models\Calendrierparents;

class CalendrierparentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("front.pages.calendrier");
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
     * @param  \App\Http\Requests\StoreCalendrierparentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalendrierparentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendrierparents  $calendrierparents
     * @return \Illuminate\Http\Response
     */
    public function show(Calendrierparents $calendrierparents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendrierparents  $calendrierparents
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendrierparents $calendrierparents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCalendrierparentsRequest  $request
     * @param  \App\Models\Calendrierparents  $calendrierparents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalendrierparentsRequest $request, Calendrierparents $calendrierparents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendrierparents  $calendrierparents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendrierparents $calendrierparents)
    {
        //
    }
}
