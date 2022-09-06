@extends('back.layout.index')

@section('content')
    <section class="bg-white dark:bg-gray-900">

            {{-- Headers --}}
            <div class='headers flex flex-col justify-center items-start xl:items-center px-6'>
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Enfants
                    inscrits</h1>

                <p class="text-gray-500 dark:text-gray-300">
                    Section: Bébé, Moyen, Grand
                </p>
            </div>

            <hr>

            {{-- Liste d'enfants --}}
            <div class="contenu" id='liste-bebe'>

                @foreach ($data as $item)
                    {{-- Structure CARD --}}
                    <a href='/backend/{{ $item->id }}/panel'>
                        <div
                            class="card-baby flex flex-col gap-2 items-center p-4 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-[#bc6c25] dark:border-gray-700 dark:hover:border-transparent">

                            <div class='w-32 h-32'>
                                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
                                    src="/assets/img/{{ $item->img }}" alt="">
                            </div>

                            <h1
                                class="mt-3 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
                                {{ $item->prenom }} <span class='uppercase'>{{ $item->nom }}</span></h1>

                            <p class="text-gray-500 dark:text-gray-300 group-hover:text-gray-300">
                                {{ $item->age }}
                                @if ($item->age > 1)
                                    ans
                                @else
                                    an
                                @endif
                            </p>

                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>
@endsection
