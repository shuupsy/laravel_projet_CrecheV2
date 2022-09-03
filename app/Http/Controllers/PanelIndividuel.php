<?php

namespace App\Http\Controllers;

use App\Models\Backaccueil;
use Illuminate\Http\Request;

class PanelIndividuel extends Controller
{
    public function index($id)
    {
        $data = Backaccueil::find($id);
        return view("back.pages.profilEnfant", compact("data"));
    }
}
