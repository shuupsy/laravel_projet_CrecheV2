@extends('front.layout.index')
@section('content')
    <section class="bg-white dark:bg-gray-900 flex justify-center items-center sizeIcon h-screen">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Our Executive
                Team</h1>

            <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error
                alias, adipisci rem similique, at omnis eligendi optio eos harum.
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($data as $item)
                <div class="panelTeam">
                    <div
                    class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group hover:bg-[#8EC9C1] rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300"
                        src="{{$item->img}}"
                        alt="">

                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
                        {{$item->nom}} {{$item->prenom}}</h1>

                        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">{{$item->poste}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        let btnIndividuel = document.querySelectorAll("panelTeam");
        btnIndividuel.array.forEach((button,index)=>{
            button.addEventListener("click",()=>{

            })
        })
    </script>
@endsection
