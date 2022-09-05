@extends('back.layout.index')
@section('content')
    <div class="sizeIcon flex justify-center items-center h-screen">
        <div class="grid lg:grid-cols-3 gap-16 sm:grid sm:grid-cols-1">
            @foreach ($inventaire as $item)
                <div class="w-80 mt-10 flex flex-wrap flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                    <div class="w-16 h-12">
                        <img class="w-full -mt-8" src="/assets/img/{{ $item->img }}">
                    </div>
                    <div class="font-bold">{{ $item->name }}</div>
                    <div>Quantité restante: {{ $item->quantity }}</div>
                    <div class="flex gap-4">
                        <form action="/backend/inventaire/diminuer/{{$item->id}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit">-</button>
                        </form>
                        <span>{{ $item->quantity }}</span>
                        <form action="/backend/inventaire/ajouter/{{$item->id}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit">+</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
