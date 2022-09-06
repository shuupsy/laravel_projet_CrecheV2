@extends('back.layout.index')

@section('content')
    {{-- Header --}}
    <div class='headers flex flex-col justify-center items-center xl:items-center px-6'>
        <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl dark:text-white">Inventaire</h1>
    </div>

    <div class="contenu pt-8 grid lg:grid-cols-3 gap-16 sm:grid sm:grid-cols-1">
        @foreach ($inventaire as $item)
            <div class="mt-10 flex flex-wrap flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                <div class="w-16 h-12">
                    <img class="w-full -mt-8" src="/assets/img/{{ $item->img }}">
                </div>
                <div class="font-bold">{{ $item->name }}</div>
                <div>Quantité restante: {{ $item->quantity }}</div>
                <div class="flex gap-4">
                    <form action="/backend/inventaire/diminuer/{{ $item->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">-</button>
                    </form>
                    <span>{{ $item->quantity }}</span>
                    <form action="/backend/inventaire/ajouter/{{ $item->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">+</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
