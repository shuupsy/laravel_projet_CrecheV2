<div class=" flex flex-col w-64 h-screen px-4 py-8 bg-white border-r dark:bg-gray-900 dark:border-gray-700">
    <div class="mt-6"></div>
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <div class="ml-10">
                <H1 class="text-3xl">BABY'ZOU</H1>
            </div>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="{{ Route('frontCalendrier') }}">
                <i class='bx bx-calendar'></i>
                <span class="mx-4 font-medium">Calendrier</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="{{ Route('frontProfil') }}">
                <i class='bx bx-user'></i>
                <span class="mx-4 font-medium">Profil enfant</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="{{ Route('frontInventaire') }}">
                <i class='bx bx-shopping-bag'></i>
                <span class="mx-4 font-medium">Inventaire</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="#">
                <i class='bx bx-file'></i>
                <span class="mx-4 font-medium">Administration</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="#">
                <i class='bx bxs-bookmarks' ></i>

                <span class="mx-4 font-medium">Réglement intérieur</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                href="{{ Route('frontAccueil') }}">
                <i class='bx bx-group'></i>

                <span class="mx-4 font-medium">Team</span>
            </a>

        </nav>

        <div class="flex items-center px-4 -mx-2">
            <img class="object-cover mx-2 rounded-full h-9 w-9"
                src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                alt="avatar" />
            <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">Compte parents</h4>
        </div>
        <a href="/backend/nurseAccueil">
            <i class='bx bx-log-out' id="log_out"></i>
            <span>GO NURSE</span>
        </a>
    </div>
</div>
