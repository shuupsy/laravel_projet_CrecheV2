@extends('front.layout.index')
@section('content')
    <div class="gap-16 sizeIcon flex justify-center items-center h-screen">
        <div class="grid lg:grid-cols-3 gap-16 sm:grid sm:grid-cols-1">
        @foreach ($inventaire as $item)
            <div class="w-80 flex flex-col items-center gap-2 bg-white drop-shadow-md rounded-lg p-4">
                <div class="w-16 h-12">
                <img class="w-full -mt-8" src="/assets/img/{{ $item->img }}">
                </div>
                <div class="font-bold -mt-2">{{ $item->name }}</div>
                <div>Quantité restante: {{ $item->quantity }}</div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
