@extends('back.layout.index')

@section('content')
    <section class="sizeIcon flex justify-center bg-white dark:bg-gray-900">
        <div class="container px-6 py-3 mx-auto">

            {{-- Titre --}}
            <div>
                <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Enfants
                    inscrits</h1>

                <p class="max-w-2xl mx-auto my-3 text-center text-gray-500 dark:text-gray-300">
                    Section: Bébé, Moyen, Grand
                </p>
            </div>

            {{-- Liste d'enfants --}}
            {{-- <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-10 md:grid-cols-2 xl:grid-cols-4"> --}}
                <div class="grid grid-cols-1 gap-2 mt-8 xl:mt-10 md:grid-cols-2 xl:grid-cols-4">

                @foreach ($data as $item)
                    <form action="{{$item->id}}/panel" method="POST">
                        @csrf

                        {{-- Structure CARD --}}
                        <button>
                            <div
                                class="w-64 flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-[#bc6c25] dark:border-gray-700 dark:hover:border-transparent">

                                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
                                    src="/assets/img/{{ $item->img }}" alt="">

                                <h1
                                    class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
                                    {{ $item->prenom }} <span class='uppercase'>{{ $item->nom }}</span></h1>

                                <p class="mt-2 text-gray-500 dark:text-gray-300 group-hover:text-gray-300">
                                    {{ $item->age }}
                                    @if ($item->age > 1)
                                        ans
                                    @else
                                        an
                                    @endif</p>

                            </div>
                        </button>
                    </form>
                @endforeach

            </div>
        </div>
    </section>

@endsection
