<div class="flex justify-center items-center my-20">
    <!--modal HORAIRE-->
    <div class="modalWindow hidden flex justify-evenly flex-col items-center text-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class='text-2xl font-black'>Horaire d'Arrivée / Sortie</h3>

        <span id="heureActuelle"
            class="text-xl my-4 border-2 px-5 py-1 border-double border-4 font-black border-stone-800 rounded-md"></span>

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
    <div class="modalWindow hidden flex justify-evenly flex-col items-center text-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class="text-2xl font-bold">Humeur en météo</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Humeur" name="activity">
            <div class='grid grid-cols-3 justify-center md:flex gap-5 my-8'>
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
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-md bg-gray-600 hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>

        </form>
    </div>

    <!--modal ACTIVITE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center text-center relative"
        id='modal-activity'>

        @include('back.partial.modal-closebtn')

        <h3 class="text-2xl font-bold">Activité</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST"
            class='flex flex-col w-11/12 mx-auto'>
            @csrf
            <label class="mt-5">Description</label>
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Activité" name="activity">
            <textarea class="shadow-lg drop-shadow-md rounded-lg mt-1 mb-5" name="response" required></textarea>

            <div class="flex justify-end">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>
    </div>

    <!--modal REPAS-->
    <div class="modalWindow hidden flex justify-center flex-col items-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class="text-2xl font-bold text-center">Comment {{ $data->prenom }} a mangé ?</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Repas" name="activity">
            <div class='md:flex gap-6 my-8'>
                <div class="md:flex flex-col justify-center mx-3 text-xl">
                    <input type="radio" name="response" value="rien mangé" id="rien">
                    <label class="my-2" for="rien">
                        Pas bien
                    </label>
                </div>

                <div class="md:flex flex-col justify-center mx-3 text-xl">
                    <input type="radio" name="response" value="pas beaucoup mangé" id="pasbien">
                    <label class="my-2" for="pasbien">
                        Moyen
                    </label>
                </div>
                <div class="md:flex flex-col justify-center mx-3 text-xl">
                    <input type="radio" name="response" value="assez bien mangé" id="bien">
                    <label class="my-2" for="bien">
                        Bien
                    </label>
                </div>
                <div class="md:flex flex-col justify-center mx-3 text-xl">
                    <input type="radio" name="response" value="très bien mangé" id="tresbien">
                    <label class="my-2" for="tresbien">
                        Très bien
                    </label>
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

    <!--modal SOMMEIL-->
    <div class="modalWindow hidden flex justify-center flex-col items-center text-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class="text-2xl font-bold">Durée de la sieste</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Sieste" name="activity">

            <div id='sleep_option' class='grid grid-cols-3 gap-4 text-center my-8'>
                <label>
                    <input class='hidden' type="radio" name="response" value="0">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>0</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value="0.30">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>0:30</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value="1.00">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>1:00</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value="1.30">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>1:30</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value="2.00">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>2:00</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value="2.30">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>2:30</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value="3.00">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>3:00</span>
                </label>

                <label>
                    <input class='hidden' type="radio" name="response" value="3.30">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>3:30</span>
                </label>
                <label>
                    <input class='hidden' type="radio" name="response" value=">4.00">
                    <span class='w-20 p-2 rounded-lg border border-[#BC6C25] cursor-pointer'>≥ 4:00</span>
                </label>
            </div>

            <div class="flex justify-center">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>

    </div>

    <!--modal CHANGE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center text-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class='text-2xl font-bold text-center'>La change de {{ $data->prenom }} a été effectuée ?</h3>

        <div class="my-5">
            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="Change" name="activity">

                <button type="submit" name="response"
                    value="{{ $data->nom }} {{ $data->prenom }} a été changé !"
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Oui
                </button>
            </form>
        </div>
    </div>

    <!--modal DIARRHEE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center text-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class='text-2xl font-bold text-center'>{{ $data->prenom }} a eu la diarrhée ?</h3>

        <div class="my-5">
            <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
                @csrf
                <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
                <input class="hidden" type="text" value="Diarrhée" name="activity">

                <button type="submit" name="response"
                    value="{{ $data->nom }} {{ $data->prenom }} a eu la diarrhée."
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Oui
                </button>
        </div>
    </div>

    <!--modal FIEVRE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center text-center relative">

        @include('back.partial.modal-closebtn')

        <h3 class='text-2xl font-bold'>Fièvre de: {{ $data->prenom }} {{ $data->nom }}</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST">
            @csrf
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Temperature" name="activity">

            <div class="flex flex-col justify-center items-center mt-2 mb-8">
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

    <!--modal BLESSURE-->
    <div class="modalWindow hidden flex justify-center flex-col items-center text-center relative"
        id='modal-blessure'>

        @include('back.partial.modal-closebtn')

        <h3 class="text-xl font-bold">Blessure</h3>

        <form action="/backend/{{ $data->id }}/panel/activity" method="POST"
            class='flex flex-col w-11/12 mx-auto'>
            @csrf
            <label class="mt-5">Description</label>
            <input class="hidden" type="text" name="backaccueil_id" value="{{ $data->id }}">
            <input class="hidden" type="text" value="Accident" name="activity">
            <textarea class="shadow-lg drop-shadow-md rounded-lg mt-1 mb-5" name="response" required></textarea>

            <div class="flex justify-end">
                <button
                    class="px-6 py-2 w-24 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-600 rounded-md hover:bg-slate-800 hover:shadow-xl focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </form>
    </div>

    <!--modal SANTE-->
    <div class="modalWindow hidden flex flex-col relative gap-6 overflow-auto">

        @include('back.partial.modal-closebtn')

        <h3 class="text-3xl text-center">Informations générales</h3>


        {{-- Allergies --}}
        <div class='flex justify-center items-center gap-10'>
            <div id='allergy' class='flex flex-col items-center'>
                <img src="/assets/img/virus.svg" alt="icone virus" width='50px'>
                <p class='text-sm'>Allergies</p>
            </div>

            <ul>
                @foreach ($allergies as $allergy)
                    <li class='list-disc font-bold'>{{ $allergy }}</li>
                @endforeach
            </ul>
        </div>

        {{-- Autorisation de sortie --}}
        <div class='flex justify-evenly'>
            <div id='phot' class='flex flex-col items-center'>
                <img src="/assets/img/door.svg" alt="icone porte" width='50px'>
                <p class='text-sm'>Autorisation de sortie :
                    @if ($enfants->exitPermission == true)
                        <span class='font-black'>OUI</span>
                    @else
                        <span class='font-black'>NON</span>
                    @endif
                </p>
            </div>
        </div>

        {{-- Autorisation de photos --}}
        <div class='flex justify-evenly'>
            <div id='phot' class='flex flex-col items-center'>
                <img src="/assets/img/camera.svg" alt="icone appareil photo" width='50px'>
                <p class='text-sm'>Autorisation de photos :
                    @if ($enfants->picturePermission == true)
                        <span class='font-black'>OUI</span>
                    @else
                        <span class='font-black'>NON</span>
                    @endif
                </p>
            </div>
        </div>
        {{-- Autorisation de photos --}}
        <div class='flex justify-evenly'>
            <div id='phot' class='flex flex-col items-center text-sm'>
                <p>Jours de présence :</p>
                <p>{{ $enfants->dayOfPresence }}</p>
            </div>
        </div>
    </div>




</div>
