<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profilenfant extends Controller
{
    public function index()
    {
        return view("front.pages.profil");
    }
}
