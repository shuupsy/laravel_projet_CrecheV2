@extends('back.layout.index')
@section('content')
    <div class="text-center text-5xl my-10">
        <h1>Baby'zou</h1>
    </div>
    <hr class="my-8">
    <div class="sizeIcon flex flex-wrap justify-center">

        <div id="btnClock" class="flex items-center flex-col">
            <div id="clock" class="h-48 w-48 m-2 "></div>
            <div>Heures</div>
        </div>
        <div id="btnHumeur" class="flex items-center flex-col">
            <div id="humeur" class="h-48 w-48 m-2 "></div>
            <div>Humeur</div>
        </div>
        <div id="btnActivite" class="flex items-center flex-col">
            <div id="activity" class="h-48 w-48 m-2 "></div>
            <div>Activité</div>
        </div>
        <div id="btnRepas" class="flex items-center flex-col">
            <div id="repas"class="h-48 w-48 m-2 "></div>
            <div>Repas</div>
        </div>
        <div id="btnSleep" class="flex items-center flex-col">
            <div id="sommeil"class="h-48 w-48 m-2 "></div>
            <div>Sommeil</div>
        </div>
        <div id="btnChange" class="flex items-center flex-col">
            <div id="change"class="h-48 w-48 m-2 "></div>
            <div>Change</div>
        </div>
        <div id="btnDiarrhe" class="flex items-center flex-col">
            <div id="diarrhe"class="h-48 w-48 m-2 "></div>
            <div>Diarrhé</div>
        </div>
        <div id="btnFievre" class="flex items-center flex-col">
            <div id="fievre"class="h-48 w-48 m-2 "></div>
            <div>Fièvre</div>
        </div>
        <div id="btnBlessure" class="flex items-center flex-col">
            <div id="blessure"class="h-48 w-48 m-2 "></div>
            <div>Blessure</div>
        </div>
        <div id="btnSante" class="flex items-center flex-col">
            <div id="sante"class="h-48 w-48 m-2 "></div>
            <div>Santé</div>
        </div>
    </div>

    <div class="absolute flex justify-center items-center w-screen my-20 sizeIcon">
        <!--modal heure-->
        <div id="modalClock" class="hidden flex justify-center modalClock flex-col items-center">
            <p>Horaire d'Arrivée / Sortie</p>
            <span id="heureActuelle" class="my-4 border-2 px-5 py-1"></span>
            <div>
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Entrée
                </button>
            </div>
            <div>
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Sortie
                </button>
            </div>
        </div>
        <!--modal Humeur-->
        <div id="modalHumeur" class="hidden flex justify-center modalHumeur flex-col items-center">
            <p class="text-3xl">Humeur en météo</p>
            <form>
                <div class='flex mt-5'>
                    {{-- COLERE --}}
                    <div class="flex flex-col items-center justify-center">
                        <label for="lightning">
                            <img src="/assets/img/mood/lightning.png" alt="humeur colere eclairs">
                        </label>
                        <input class="mt-5" type="radio" name='humeur' value="colere" id="lightning">
                    </div>

                    {{-- TRISTE --}}
                    <div class="flex flex-col items-center justify-center">
                        <label for="rain">
                            <img src="/assets/img/mood/water.png" alt="humeur triste pluie">
                        </label>
                        <input class="mt-5" type="radio" name='humeur' value="triste" id="rain">
                    </div>

                    {{-- AGITE --}}
                    <div class="flex flex-col items-center justify-center">
                        <label for="wind">
                            <img src="/assets/img/mood/hurricane.png" alt="humeur agite tornade">
                        </label>
                        <input class="mt-5" type="radio" name='humeur' value="agite" id="wind">
                    </div>

                    {{-- STRESS --}}
                    <div class="flex flex-col items-center justify-center">
                        <label for="cloud">
                            <img src="/assets/img/mood/cloudsun.png" alt="humeur distrait stress nuage">
                        </label>
                        <input class="mt-5" type="radio" name='humeur' value="distrait" id="cloud">
                    </div>

                    {{-- JOYEUX --}}
                    <div class="flex flex-col items-center justify-center">
                        <label for="sun">
                            <img src="/assets/img/mood/sun.png" alt="humeur soleil">
                        </label>
                        <input class="mt-5" type="radio" name='humeur' value="joyeux" id="sun">
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
        <!--modal activité-->
        <div id="modalActivite" class="hidden flex justify-center modalActivite flex-col items-center">
            <p class="text-3xl">Activités</p>
            <p class="mt-5">Description</p>
            <textarea class="m-5 areaShadow" name="" id="" cols="30" rows="10"></textarea>
            <div>
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </div>
        <!--modal repas-->
        <div id="modalRepas" class="hidden flex justify-center modalRepas flex-col items-center">
            <p class="text-3xl">Qualité du repas</p>
            <form>
                <div class='flex mt-10'>
                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="rien">
                            rien
                        </label>
                        <input type="radio" name="humeur" id="rien">
                    </div>

                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="pasbien">
                            pas bien
                        </label>
                        <input type="radio" name="humeur" id="pasbien">
                    </div>
                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="bien">
                            bien
                        </label>
                        <input type="radio" name="humeur" id="bien">
                    </div>
                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="tresbien">
                            tres bien
                        </label>
                        <input type="radio" name="humeur" id="tresbien">
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
        <!--modal sommeil-->
        <div id="modalSleep" class="hidden flex justify-center modalNuit flex-col items-center">
            <p class="text-3xl">Qualité du repas</p>
            <form>
                <div class='flex mt-10'>
                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="moins1">
                            <span>
                                -1heure
                            </span>
                        </label>
                        <input type="radio" name="sleep" id="moins1">
                    </div>

                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="1a2">
                            1 à 2 heures
                        </label>
                        <input type="radio" name="sleep" id="1a2">
                    </div>
                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="2a3">
                            2 à 3 heures
                        </label>
                        <input type="radio" name="sleep" id="2a3">
                    </div>
                    <div class="flex flex-col justify-center mx-3 text-xl">
                        <label class="my-2" for="3plus">
                            3 heures +
                        </label>
                        <input type="radio" name="sleep" id="3plus">
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
        <div id="modalChange" class="hidden flex justify-center modalChange flex-col items-center">
            <p>la change de {{$data->nom}} {{$data->prenom}} a t'elle été effectué ?</p>
            <div class="mt-10">
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </div>
        <!--modal diarrhé-->
        <div id="modalDiarrhe" class="hidden flex justify-center modalChange flex-col items-center">
            <p>{{$data->nom}} {{$data->prenom}} a t'elle eu la diarrhé ?</p>
            <div class="mt-10">
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </div>
        <!--modal fievre-->
        <div id="modalFievre" class="hidden flex justify-center modalChange flex-col items-center">
            <p>Fièvre de: {{$data->nom}} {{$data->prenom}}</p>
            <div class="mt-10">
                <form method="POST">
                    @csrf
                    <div class="container_temperature">
                        <div class="flex flex-col text-center range-slider mt-5">
                            <span id="rs-bullet" class="text-3xl">37°C</span>
                            <input id="rs-range-line" type="range" name="temperature" min="35"
                                step="0.1" max="40">
                        </div>

                    </div>
                    <div class="flex justify-center">

                        <button
                        class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Valider
                    </button>
                </div>
                </form>

            </div>
        </div>

        <!--modal blessure-->
        <div id="modalBlessure" class="hidden flex justify-center modalActivite flex-col items-center">
            <p class="text-3xl">Blessures/soucis</p>
            <p class="mt-5">Description</p>
            <textarea class="m-5 areaShadow" name="" id="" cols="30" rows="10"></textarea>
            <div>
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </div>
        <!--modal santé-->
        <div id="modalSante" class="hidden flex justify-center modalActivite flex-col items-center">
            <p class="text-3xl">Santé</p>
            <p class="mt-5">Description</p>
            <textarea class="m-5 areaShadow" name="" id="" cols="30" rows="10"></textarea>
            <div>
                <button
                    class="px-6 py-2 w-24 my-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Valider
                </button>
            </div>
        </div>
    </div>
@endsection
