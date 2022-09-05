@extends('back.layout.index')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-end text-5xl my-6 mx-7">
        <h1>Dashboard - <span class='font-bold'>{{ $data -> prenom }} {{ $data -> nom }}</span></h1>
    </div>

    <hr class="my-8">

    {{-- Icones --}}
    <div class="sizeIcon grid grid-cols-5 gap-8 px-24 mx-auto justify-center">
        {{-- Icone Heure --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="clock" class="h-28 w-28 my-4 "></div>
            <div>Horaires</div>
        </div>
        {{-- Icone Humeur --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="humeur" class="h-28 w-28 my-4 "></div>
            <div>Humeur</div>
        </div>
        {{-- Icone Activité --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="activity" class="h-28 w-28 my-4 "></div>
            <div>Activité</div>
        </div>
        {{-- Icone Repas --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="repas"class="h-28 w-28 my-4 "></div>
            <div>Repas</div>
        </div>
        {{-- Icone Sommeil --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="sommeil"class="h-28 w-28 my-4 "></div>
            <div>Sommeil</div>
        </div>
        {{-- Icone Change --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="change"class="h-28 w-28 my-4 "></div>
            <div>Change</div>
        </div>
        {{-- Icone Diarrhée --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="diarrhe"class="h-28 w-28 my-4 "></div>
            <div>Diarrhée</div>
        </div>
        {{-- Icone Fièvre --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="fievre"class="h-28 w-28 my-4 "></div>
            <div>Fièvre</div>
        </div>
        {{-- Icone Blessure --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="blessure"class="h-28 w-28 my-4 "></div>
            <div>Blessure</div>
        </div>
        {{-- Icone Santé --}}
        <div
            class="panelBtn flex items-center flex-col shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div id="sante"class="h-28 w-28 my-4 "></div>
            <div>Santé</div>
        </div>
    </div>

    {{-- Modals --}}
    @include('back.partial.modal')

@endsection
