@extends('back.layout.index')
@section('content')
    <div class="sizeIcon flex justify-center items-center h-screen">
        <div class="grid lg:grid-cols-3 gap-16">


            @foreach ($inventaire as $item)
                <div class="w-96 mt-10 flex flex-wrap flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                    <div class="w-32 h-32">
                        <img class="w-full" src="/assets/img/{{ $item->img }}">
                    </div>
                    <div class="mt-10">quantité restante: {{ $item->quantity }}</div>
                    <div class="flex gap-4">
                        <form action="/backend/inventaire/diminuer" method="POST">
                            <button type="submit">-</button>
                        </form>
                        <span>{{ $item->quantity }}</span>
                        <form action="/backend/inventaire/ajouter/{{$item->id}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit">+</button>
                        </form>
                    </div>
                    <div>{{ $item->name }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
