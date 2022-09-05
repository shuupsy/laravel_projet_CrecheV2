<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use App\Models\Journalparents;
use App\Models\Calendriernurse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCalendriernurseRequest;
use App\Http\Requests\UpdateCalendriernurseRequest;

class CalendriernurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfants = Backaccueil::all();
        $journalier = Journalparents::all();
        return view("back.pages.calendrier",compact("enfants", "journalier"));
    }

    public function affichageDay($id)
    {
        $enfants = Backaccueil::all();
        $journalier = Journalparents::whereDay("updated_at", "=", $id)->get();
        return view("back.pages.calendrier",compact("enfants","journalier"));
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
     * @param  \App\Http\Requests\StoreCalendriernurseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalendriernurseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calendriernurse  $calendriernurse
     * @return \Illuminate\Http\Response
     */
    public function show(Calendriernurse $calendriernurse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calendriernurse  $calendriernurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendriernurse $calendriernurse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCalendriernurseRequest  $request
     * @param  \App\Models\Calendriernurse  $calendriernurse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCalendriernurseRequest $request, Calendriernurse $calendriernurse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calendriernurse  $calendriernurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendriernurse $calendriernurse)
    {
        //
    }
}
