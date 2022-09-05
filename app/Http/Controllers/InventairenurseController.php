<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinventaireNurseRequest;
use App\Http\Requests\UpdateinventaireNurseRequest;
use App\Models\Inventairenurse;

class InventairenurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaire = Inventairenurse::all();
        return view("back.pages.inventaire",compact("inventaire"));
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
     * @param  \App\Http\Requests\StoreinventaireNurseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinventaireNurseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventaireNurse  $inventaireNurse
     * @return \Illuminate\Http\Response
     */
    public function show(inventaireNurse $inventaireNurse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventaireNurse  $inventaireNurse
     * @return \Illuminate\Http\Response
     */
    public function edit(inventaireNurse $inventaireNurse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinventaireNurseRequest  $request
     * @param  \App\Models\inventaireNurse  $inventaireNurse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinventaireNurseRequest $request, inventaireNurse $inventaireNurse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventaireNurse  $inventaireNurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventaireNurse $inventaireNurse)
    {
        //
    }
    public function ajouter($id){
        $product = Inventairenurse::find($id);
        $product->quantity += 1;
        // dd($product->quantity);
        $product->save();
        return redirect()->back();

    }

    public function diminuer($id){
        $product = Inventairenurse::find($id);
        $product->quantity -= 1;
        // dd($product->quantity);
        $product->save();
        return redirect()->back();

    }

}
