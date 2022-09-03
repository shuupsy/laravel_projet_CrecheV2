<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventaireparentsRequest;
use App\Http\Requests\UpdateInventaireparentsRequest;
use App\Models\Inventaireparents;

class InventaireparentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaire = Inventaireparents::all();
        return view("front.pages.inventaire",compact("inventaire"));
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
     * @param  \App\Http\Requests\StoreInventaireparentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventaireparentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaireparents  $inventaireparents
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaireparents $inventaireparents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaireparents  $inventaireparents
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaireparents $inventaireparents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventaireparentsRequest  $request
     * @param  \App\Models\Inventaireparents  $inventaireparents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventaireparentsRequest $request, Inventaireparents $inventaireparents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaireparents  $inventaireparents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaireparents $inventaireparents)
    {
        //
    }
}
