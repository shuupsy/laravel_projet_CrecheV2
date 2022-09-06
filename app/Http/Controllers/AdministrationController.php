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
<<<<<<< HEAD
        return view("front.pages.administration");
=======
        $enfants = Backaccueil::find(1);
        $data = Profilenfant::find(1);
        return view("front.pages.administration", compact("enfants", "data"));
>>>>>>> 2c3f07fdd41f7e535cdd88ddfe7554bc4bab7041
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
