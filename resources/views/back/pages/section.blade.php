@extends('back.layout.index')
@section('content')
    <section class="sizeIcon flex justify-center bg-white dark:bg-gray-900">
        <div class="container px-6 py-3 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Les enfants
                inscrits</h1>

            <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                Section: Bebe, Moyen, Grand
            </p>

            <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-10 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($data as $item)
                    <form action="{{$item->id}}/panel/{{$item->nom}}_{{$item->prenom}}" method="POST">
                        @csrf
                        <button>
                            <div
                                class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
                                    src="/assets/img/{{ $item->img }}" alt="">

                                <h1
                                    class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
                                    {{ $item->nom }} {{ $item->prenom }}</h1>

                                <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">
                                    {{ $item->surnom }}</p>
                            </div>
                        </button>
                    </form>
                @endforeach
            </div>
        </div>
    </section>
@endsection
