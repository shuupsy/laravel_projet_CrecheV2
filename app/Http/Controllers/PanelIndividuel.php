<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use App\Models\Frontaccueil;
use App\Models\Profilenfant;
use Illuminate\Http\Request;
use App\Models\Journalparents;
use App\Models\Messageenfants;

class PanelIndividuel extends Controller
{
    public function index($id)
    {
        $messages = Messageenfants::all();
        $data = Backaccueil::find($id);
        $nurses = Frontaccueil::all();
        $enfants = Profilenfant::find($id);
        $allergies = explode(",", $enfants->allergy);

        return view("back.pages.panel", compact("data","messages","nurses", "enfants", "allergies"));
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
