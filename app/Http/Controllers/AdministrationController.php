<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use App\Models\Profilenfant;
use App\Models\Administration;
use App\Http\Requests\StoreAdministrationRequest;
use App\Http\Requests\UpdateAdministrationRequest;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("front.pages.administration");
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
     * @param  \App\Http\Requests\StoreAdministrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function show(Administration $administration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function edit(Administration $administration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdministrationRequest  $request
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrationRequest $request, Administration $administration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administration $administration)
    {
        //
    }
}
