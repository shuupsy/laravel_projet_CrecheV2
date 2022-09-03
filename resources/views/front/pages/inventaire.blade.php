@extends('front.layout.index')
@section('content')
    <div class=" gap-16 sizeIcon flex justify-center items-center h-screen">
        @foreach ($inventaire as $item)
            <div class="w-80 h-96 p-10 flex flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                <img class="w-full" src="/assets/img/{{ $item->img }}" alt="">
                <div>Quantité restante: {{ $item->quantity }}</div>
                <div>{{ $item->name }}</div>
            </div>
        @endforeach
    </div>
@endsection
