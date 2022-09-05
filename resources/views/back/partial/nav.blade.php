<div class="flex flex-col w-64 h-screen px-4 py-8 bg-white border-r dark:bg-gray-900 dark:border-gray-700">
    <div class="mt-6"></div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            {{-- Titre --}}
            <div>
                <h1 class="text-3xl"><i class='bx bxs-baby-carriage'></i> BABY'ZOU</h1>
            </div>

            {{-- Section --}}
            <div class="mt-20">
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="{{ Route('backAccueil') }}">
                    <i class='bx bx-user'></i>
                    <span class="mx-4 font-medium">Section</span>
                </a>
            </div>

            {{-- Calendrier --}}
            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="{{ Route('backCalendrier') }}">
                <i class='bx bx-calendar'></i>
                <span class="mx-4 font-medium">Calendrier</span>
            </a>

            {{-- Inventaire --}}
            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="{{ Route('backInventaire') }}">
                <i class='bx bx-shopping-bag'></i>
                <span class="mx-4 font-medium">Inventaire</span>
            </a>

        </nav>

        {{-- Compte --}}
        <div class="flex items-center px-4 -mx-2">
            <img class="object-cover mx-2 rounded-full h-9 w-9"
                src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                alt="avatar" />
            <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">Compte puéricultrice</h4>
        </div>

        {{-- A SUPPRIMER --}}
        <a href="/frontend/accueil">
            <i class='bx bx-log-out' id="log_out"></i>
            <span>GO PARENTS</span>
        </a>

    </div>
</div>
