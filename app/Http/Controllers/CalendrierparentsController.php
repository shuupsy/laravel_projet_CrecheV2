<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use App\Models\Frontaccueil;
use App\Models\Journalparents;
use App\Models\Messageenfants;
use App\Models\Calendrierparents;
use App\Http\Requests\StoreCalendrierparentsRequest;
use App\Http\Requests\UpdateCalendrierparentsRequest;

class CalendrierparentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journalier = Journalparents::all();
        $enfants = Backaccueil::all();
        $validation = 0;
        return view("front.pages.calendrier",compact("journalier","enfants","validation"));
    }
    public function affichageDay($id)
    {
        $enfants = Backaccueil::all();
        $messages = Messageenfants::all();
        $nurses = Frontaccueil::all();
        $validation = 1;
        $journalier = Journalparents::whereDay("updated_at", "=", $id)->where("backaccueil_id","=", "1")->get();
        return view("front.pages.calendrier",compact("enfants","journalier","messages","nurses","validation"));
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
