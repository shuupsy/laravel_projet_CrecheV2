<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use App\Models\Profilenfant;
use App\Http\Requests\StoreProfilenfantRequest;
use App\Http\Requests\UpdateProfilenfantRequest;

class ProfilenfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nom = Backaccueil::find(1);
        $enfants = Profilenfant::find(1);
        return view("front.pages.profil", compact('enfants', 'nom'));
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
     * @param  \App\Http\Requests\StoreProfilenfantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilenfantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profilenfant  $profilenfant
     * @return \Illuminate\Http\Response
     */
    public function show(Profilenfant $profilenfant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profilenfant  $profilenfant
     * @return \Illuminate\Http\Response
     */
    public function edit(Profilenfant $profilenfant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilenfantRequest  $request
     * @param  \App\Models\Profilenfant  $profilenfant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilenfantRequest $request, Profilenfant $profilenfant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profilenfant  $profilenfant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profilenfant $profilenfant)
    {
        //
    }
}
