@extends('front.layout.index')
@section('content')
    <section class="bg-white dark:bg-gray-900 flex justify-center items-center sizeIcon h-screen">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Notre équipe</h1>

            <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                Notre équipe de puéricultrices motivé.es
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($data as $item)
                    <div onclick="ouvertureMessage({{ $item->id }})"
                        class="flex flex-col items-center p-8 transition-colors duration-300 transform cursor-pointer group hover:bg-[#8EC9C1] rounded-xl">
                        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="{{ $item->img }}"
                            alt="">
                        <h1
                            class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">
                            {{ $item->nom }} {{ $item->prenom }}</h1>

                        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">
                            {{ $item->poste }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <form id="postForm" class="hidden" method="POST">
            @csrf
            <div class="maskMessage flex justify-center items-center">
                <div class="flex sizeIcon justify-center items-center">
                    <div class="boxMessage flex flex-col items-center justify-center rounded gap-2 relative">
                        <div onclick="closeMessage()" class="h-10 w-10 flex justify-center items-center bg-gray-400 text-white rounded-br-lg absolute top-0 left-0">X</div>
                        <textarea class="p-4 w-5/6 bg-slate-50 rounded-lg border border-grey-300" name="message" cols="30" rows="10" placeholder="Veuillez entrer votre message."></textarea>
                        <button class="p-2 rounded-lg w-5/6 border border-grey-300 text-gray-400" type="submit">Envoyez</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script>
        let btnIndividuel = document.querySelectorAll("panelTeam");
        btnIndividuel.array.forEach((button,index)=>{
            button.addEventListener("click",()=>{

            })
        })
        function ouvertureMessage(x) {
            let formAffichage = document.getElementById("postForm")
            formAffichage.setAttribute("action", `/frontend/messagerie/envoi/${x}`)
            formAffichage.classList.remove("hidden")
        }
        function closeMessage() {
            let formAffichage = document.getElementById("postForm")
            formAffichage.removeAttribute("action")
            formAffichage.classList.add("hidden")
        }
    </script>
@endsection
