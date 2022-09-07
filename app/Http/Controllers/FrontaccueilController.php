<?php

namespace App\Http\Controllers;

use App\Models\Connexion;
use App\Models\Frontaccueil;
use App\Http\Requests\StoreFrontaccueilRequest;
use App\Http\Requests\UpdateFrontaccueilRequest;

class FrontaccueilController extends Controller
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
     * @param  \App\Http\Requests\StoreFrontaccueilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFrontaccueilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontaccueil  $frontaccueil
     * @return \Illuminate\Http\Response
     */
    public function show(Frontaccueil $frontaccueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontaccueil  $frontaccueil
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontaccueil $frontaccueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFrontaccueilRequest  $request
     * @param  \App\Models\Frontaccueil  $frontaccueil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFrontaccueilRequest $request, Frontaccueil $frontaccueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontaccueil  $frontaccueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontaccueil $frontaccueil)
    {
        //
    }
}
