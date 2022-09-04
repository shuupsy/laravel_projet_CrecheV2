<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use Illuminate\Http\Request;
use App\Models\Journalparents;

class PanelIndividuel extends Controller
{
    public function index($id)
    {
        $data = Backaccueil::find($id);
        return view("back.pages.profilEnfant", compact("data"));
    }
    public function activity(Request $request, $id)
    {
        $data = new Journalparents;
        $data->response = $request->response;
        $data->backaccueil_id = $request->backaccueil_id;
        $data->activity = $request->activity;
        $data->save();
        return redirect("/backend/nurseAccueil");

    }
}
