<div class="burger">
    <i class='bx bx-menu p-2 text-xl border-2 border-slate-600 rounded-full cursor-pointer' onclick="Burger()"></i>
</div>

<div class="sidebar fixed flex flex-col h-screen px-4 pt-8 pb-3 bg-white border-r dark:bg-gray-900 dark:border-gray-700">


    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            {{-- Titre --}}
            <div class='flex justify-between items-center'>
                <a href="/backend/nurseAccueil" class='flex items-center gap-5'>
                    <i class='bx bxs-baby-carriage text-4xl text-[#84954b] font-black'></i>
                    <h1 class="text-xl">BABY'ZOU</h1>
                </a>
                {{-- A SUPPRIMER --}}
                <a href="/frontend/accueil">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
                {{-- A SUPPRIMER --}}
            </div>

            <div class='flex flex-col gap-5 mt-20'>
                {{-- Section --}}
                <a class="flex items-center gap-5 px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="{{ Route('backAccueil') }}">
                    <i class='bx bx-user text-xl'></i>
                    <span class="font-medium">Section</span>
                </a>

                {{-- Calendrier --}}
                <a class="flex items-center gap-5 px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="{{ Route('backCalendrier') }}">
                    <i class='bx bx-calendar text-xl'></i>
                    <span class="font-medium">Calendrier</span>
                </a>

                {{-- Inventaire --}}
                <a class="flex items-center gap-5 px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="{{ Route('backInventaire') }}">
                    <i class='bx bx-shopping-bag text-xl'></i>
                    <span class="font-medium">Inventaire</span>
                </a>

                {{-- Messagerie --}}
                {{-- <a class="flex items-center gap-5 px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i class='bx bx-chat text-xl'></i>
                    <span class="font-medium">Messagerie</span>
                </a> --}}
            </div>

        </nav>

        {{-- Compte --}}
        <div class="flex items-center gap-2 px-2 my-2">
            <img class="object-cover rounded-full h-9 w-9"
                src="/assets/img/team/femme3.jpg"
                alt="avatar" />
            <h4 class="font-medium text-gray-800 dark:text-gray-200 hover:underline">Compte puéricultrice</h4>
        </div>


    </div>
</div>
