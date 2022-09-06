<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use App\Models\Frontaccueil;
use App\Models\Messageenfants;
use App\Http\Requests\StoreBackaccueilRequest;
use App\Http\Requests\UpdateBackaccueilRequest;

class BackaccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Backaccueil::all();
        $messages = Messageenfants::all();
        $nurses = Frontaccueil::all();
        return view("back.pages.section",compact("data","messages","nurses"));
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
     * @param  \App\Http\Requests\StoreBackaccueilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBackaccueilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backaccueil  $backaccueil
     * @return \Illuminate\Http\Response
     */
    public function show(Backaccueil $backaccueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backaccueil  $backaccueil
     * @return \Illuminate\Http\Response
     */
    public function edit(Backaccueil $backaccueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBackaccueilRequest  $request
     * @param  \App\Models\Backaccueil  $backaccueil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBackaccueilRequest $request, Backaccueil $backaccueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backaccueil  $backaccueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Backaccueil $backaccueil)
    {
        //
    }
}
