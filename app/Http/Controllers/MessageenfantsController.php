<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageenfantsRequest;
use App\Http\Requests\UpdateMessageenfantsRequest;
use App\Models\Messageenfants;

class MessageenfantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("front.pages.messagerie");
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
     * @param  \App\Http\Requests\StoreMessageenfantsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageenfantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messageenfants  $messageenfants
     * @return \Illuminate\Http\Response
     */
    public function show(Messageenfants $messageenfants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messageenfants  $messageenfants
     * @return \Illuminate\Http\Response
     */
    public function edit(Messageenfants $messageenfants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageenfantsRequest  $request
     * @param  \App\Models\Messageenfants  $messageenfants
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessageenfantsRequest $request, Messageenfants $messageenfants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messageenfants  $messageenfants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messageenfants $messageenfants)
    {
        //
    }
}
