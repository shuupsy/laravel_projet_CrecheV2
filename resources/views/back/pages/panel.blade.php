@extends('back.layout.index')

@section('content')
    {{-- Header --}}
    <div class="headers flex items-center justify-end text-5xl my-6 mx-7">
        <h1>Dashboard - <span class='font-bold'>{{ $data->prenom }} {{ $data->nom }}</span></h1>
    </div>

    <hr class="my-8">

    {{-- Icones --}}
    <div id='icones' class="sizeIcon px-2 md:px-10 mx-auto">
        {{-- Icone Heure --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/clock.svg" alt="svg clock time"></div>
            <p>Horaires</p>
        </div>
        {{-- Icone Humeur --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/baby.svg" alt="svg baby mood"></div>
            <p>Humeur</p>
        </div>
        {{-- Icone Activité --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/cubes.svg" alt="svg cubes activity"></div>
            <p>Activité</p>
        </div>
        {{-- Icone Repas --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/feeding-bottle.svg" alt="svg food feeding bottle milk"></div>
            <p>Repas</p>
        </div>
        {{-- Icone Sommeil --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/zzz.svg" alt="svg sleep" id='sleep-icon'> </div>
            <p>Sommeil</p>
        </div>
        {{-- Icone Change --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/diaper.svg" alt="svg diaper change"></div>
            <p>Change</p>
        </div>
        {{-- Icone Diarrhée --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/poo.svg" alt="svg poo diarrhea"></div>
            <p>Diarrhée</p>
        </div>
        {{-- Icone Fièvre --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/thermometer.svg" alt="svg thermometer sick"></div>
            <p>Fièvre</p>
        </div>
        {{-- Icone Blessure --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/first-aid-kit.svg" alt="svg accident first aid kit"></div>
            <p>Blessure</p>
        </div>
        {{-- Icone Santé --}}
        <div
            class="panelBtn flex flex-col justify-evenly items-center gap-2 py-2 px-4 shadow-md shadow-slate-400 border border-zinc-800 rounded-lg cursor-pointer">
            <div><img src="/assets/img/medical.svg" alt="svg allergy medical"></div>
            <p>Santé</p>
        </div>
    </div>

    {{-- Modals --}}
    @include('back.partial.modal')
@endsection
