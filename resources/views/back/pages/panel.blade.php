@extends('back.layout.index')

@section('content')
    {{-- Header --}}
    <div class="headers flex flex-col md:flex-row md:justify-end md:items-center md:gap-2 items-start justify-center px-6 border-b-2 text-3xl">
        <h1 class='font-thin'>Dashboard</h1>
        <h2 class='font-bold'>{{ $data->prenom }} {{ $data->nom }}</h2>
    </div>

    {{-- Icones --}}
    <div id='icones' class="contenu ">
        {{-- Icone Heure --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/clock.svg" alt="svg clock time"></div>
            <p>Horaires</p>
        </div>
        {{-- Icone Humeur --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/baby.svg" alt="svg baby mood"></div>
            <p>Humeur</p>
        </div>
        {{-- Icone Activité --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/cubes.svg" alt="svg cubes activity"></div>
            <p>Activité</p>
        </div>
        {{-- Icone Repas --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/feeding-bottle.svg" alt="svg food feeding bottle milk"></div>
            <p>Repas</p>
        </div>
        {{-- Icone Sommeil --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/zzz.svg" alt="svg sleep" id='sleep-icon'> </div>
            <p>Sommeil</p>
        </div>
        {{-- Icone Change --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/diaper.svg" alt="svg diaper change"></div>
            <p>Change</p>
        </div>
        {{-- Icone Diarrhée --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/poo.svg" alt="svg poo diarrhea"></div>
            <p>Diarrhée</p>
        </div>
        {{-- Icone Fièvre --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/thermometer.svg" alt="svg thermometer sick"></div>
            <p>Fièvre</p>
        </div>
        {{-- Icone Blessure --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/first-aid-kit.svg" alt="svg accident first aid kit"></div>
            <p>Blessure</p>
        </div>
        {{-- Icone Santé --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 pb-2 pt-4 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/medical.svg" alt="svg allergy medical"></div>
            <p>Infos</p>
        </div>
    </div>

    {{-- Modals --}}
    @include('back.partial.modal')
@endsection
