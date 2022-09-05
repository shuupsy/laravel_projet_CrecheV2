<div class="absolute flex justify-center items-center w-screen my-20 sizeIcon">
    <!--modal HORAIRE-->
    <div class="modalWindow hidden flex justify-evenly flex-col items-center text-center">
        <h3 class='text-2xl font-black'>Horaire d'Arrivée / Sortie</h3>

        <span id="heureActuelle" class="my-4 border-2 px-5 py-1 border-double border-4 font-black border-stone-800 rounded-md"></span>

        <div class='flex gap-6 text-center'>
            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="heure d'arrivée" name="activity">
                <button type="submit" value="{{ date('TH:i:s') }}" name="response"
                    class="px-6 py-2 my-2 font-medium tracking-wide text-white text-center transition-colors duration-300 transform bg-[#8EC9C1] rounded-lg hover:bg-[#0bc8af] hover:text-black focus:outline-none focus:ring focus:ring-scale-700 focus:ring-opacity-80">
                    ENTRÉE (matin)
                </button>
            </form>

            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="heure de sortie" name="activity">
                <button type="submit" value="{{ date('TH:i:s') }}" name="response"
                    class="px-6 py-2 my-2 font-medium tracking-wide text-white transition-colors duration-300 transform bg-[#DDA15E] rounded-lg hover:bg-[#e27f0e] hover:text-black focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    SORTIE (soir)
                </button>
            </form>
        </div>
        <p class='text-xs'><span class='underline'>Guide:</span> Appuyez sur un des 2 boutons pour enregistrer
            automatiquement l'heure d'arrivée/sortie.</p>
    </div>

    <!--modal HUMEUR-->
    <div class="modalWindow hidden flex justify-evenly flex-col items-center modalHumeur ">
        <h3 class="text-2xl font-bold">Humeur en météo</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Humeur" name="activity">
            <div class='flex gap-5 my-8'>
                {{-- COLERE --}}
                <div class="flex flex-col items-center justify-center">
                    <label for="lightning">
                        <img src="/assets/img/mood/lightning.png" alt="humeur colere eclairs" width='85px'>
                    </label>
                    <input class="mt-3" type="radio" name='response' value="colere" id="lightning">
                </div>

                {{-- TRISTE --}}
                <div class="flex flex-col items-center justify-center">
                    <label for="rain">
                        <img src="/assets/img/mood/water.png" alt="humeur triste pluie" width='85px'>
                    </label>
                    <input class="mt-3" type="radio" name='response' value="triste" id="rain">
                </div>

                {{-- AGITE --}}
                <div class="flex flex-col items-center justify-center">
                    <label for="wind">
                        <img src="/assets/img/mood/hurricane.png" alt="humeur agite tornade" width='85px'>
                    </label>
                    <input class="mt-3" type="radio" name='response' value="agite" id="wind">
                </div>

                {{-- STRESS --}}
                <div class="flex flex-col items-center justify-center">
                    <label for="cloud">
                        <img src="/assets/img/mood/cloudsun.png" alt="humeur distrait stress nuage" width='85px'>
                    </label>
                    <input class="mt-3" type="radio" name='response' value="distrait" id="cloud">
                </div>

                {{-- JOYEUX --}}
                <div class="flex flex-col items-center justify-center">
                    <label for="sun">
                        <img src="/assets/img/mood/sun.png" alt="humeur soleil" width='75px'>
                    </label>
                    <input class="mt-3" type="radio" name='response' value="joyeux" id="sun">
                </div>

            </div>

            <div class="flex justify-center">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>

        </form>
    </div>

    <!--modal ACTIVITE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center" id='modal-activity'>
        <p class="text-2xl font-bold">Activité</p>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST" class='flex flex-col'>
            @csrf
            <label class="mt-5">Description</label>
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="activité" name="activity">
            <textarea class="shadow-lg drop-shadow-md rounded-lg mt-1 mb-5" name="response"></textarea>

            <div class="flex justify-end">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>
    </div>

    <!--modal REPAS-->
    <div class="modalWindow hidden flex justify-center flex-col items-center">
        <h3 class="text-2xl font-bold">Comment {{ $data -> prenom }} a mangé ?</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Repas" name="activity">
            <div class='flex gap-6 my-8'>
                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="rien">
                        Pas bien
                    </label>
                    <input type="radio" name="response" value="rien mangé" id="rien">
                </div>

                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="pasbien">
                        Moyen
                    </label>
                    <input type="radio" name="response" value="pas beaucoup mangé" id="pasbien">
                </div>
                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="bien">
                        Bien
                    </label>
                    <input type="radio" name="response" value="assez bien mangé" id="bien">
                </div>
                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="tresbien">
                        Très bien
                    </label>
                    <input type="radio" name="response" value="très bien mangé" id="tresbien">
                </div>
            </div>

            <div class="flex justify-center">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>

    </div>

    <!--modal sommeil-->
    <div class="modalWindow hidden flex justify-center flex-col items-center">
        <p class="text-3xl">Qualité du repas</p>
        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Sieste" name="activity">
            <div class='flex mt-10'>
                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="moins1">
                        <span>
                            -1heure
                        </span>
                    </label>
                    <input type="radio" name="response" value="presque pas dormi" id="moins1">
                </div>

                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="1a2">
                        1 à 2 heures
                    </label>
                    <input type="radio" name="response" value="dormi de 1 à 2 heures" id="1a2">
                </div>
                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="2a3">
                        2 à 3 heures
                    </label>
                    <input type="radio" name="response" value="dormi de 2 à 3 heures" id="2a3">
                </div>
                <div class="flex flex-col justify-center mx-3 text-xl">
                    <label class="my-2" for="3plus">
                        3 heures +
                    </label>
                    <input type="radio" name="response" value="dormi plus de 3 heures" id="3plus">
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>

    </div>
    <!--modal change-->
    <div class="modalWindow hidden flex justify-center modalChange flex-col items-center">
        <p>la change de {{ $data->nom }} {{ $data->prenom }} a t'elle été effectué ?</p>
        <div class="mt-10">
            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="Change" name="activity">
                <button name="response" value="{{ $data->nom }} {{ $data->prenom }} a été changé !"
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
        </div>
    </div>
    <!--modal diarrhée-->
    <div class="modalWindow hidden flex justify-center modalChange flex-col items-center">
        <p>{{ $data->nom }} {{ $data->prenom }} a t'elle eu la diarrhé ?</p>
        <div class="mt-10">
            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="Diarrhé" name="activity">
                <button name="response" value="{{ $data->nom }} {{ $data->prenom }} à eu la diarrhé"
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
        </div>
    </div>
    <!--modal fievre-->
    <div class="modalWindow hidden flex justify-center modalChange flex-col items-center">
        <p>Fièvre de: {{ $data->nom }} {{ $data->prenom }}</p>
        <div class="mt-10">
            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="Temperature" name="activity">
                <div class="container_temperature">
                    <div class="flex flex-col text-center range-slider mt-5">
                        <span id="rs-bullet" class="text-3xl">37°C</span>
                        <input id="rs-range-line" type="range" name="response" min="35" step="0.1"
                            max="40">
                    </div>

                </div>

                <div class="flex justify-center">
                    <button
                        class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Valider
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!--modal BLESSURE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center" id='modal-blessure'>
        <h3 class="text-xl font-bold">Blessure</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST" class='flex flex-col'>
            @csrf
            <label class="mt-5">Description</label>
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Accident" name="activity">
            <textarea class="shadow-lg drop-shadow-md rounded-lg mt-1 mb-5" name="response"></textarea>

            <div class="flex justify-end">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>
    </div>
    <!--modal santé-->
    <div class="modalWindow hidden flex justify-center modalActivite flex-col items-center">
        <p class="text-3xl">Santé</p>
        <p class="mt-5">Description</p>
        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Sante" name="activity">
            <textarea class="m-5 areaShadow" name="response" id="" cols="30" rows="10"></textarea>

            <div>
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>
    </div>
</div>
