@extends("front.layout.index")

@section("content")
{{-- Header --}}
<div class='headers flex flex-col justify-center items-start xl:items-center px-6'>
    <h1 class="text-3xl font-semibold text-gray-800 lg:text-4xl dark:text-white">Profil de votre enfant</h1>
</div>
<div class="contenu contenuProfil">
    <div class="infosGen">
        <p class="prenom">{{$nom->prenom}} {{$nom->nom}}</p>
        <p> <img class="bg-[#CDD3DF] w-24 h-24 rounded-full p-4 my-4" src="/assets/img/baby.svg"
                alt=""></p>
        <div class="presences">
            <p class="donneesPresence">
                <span class="jour">{{$enfants->presence}}</span>
                <span class="joursPresence">Jours
                    <span class="semaine">par semaine</span>
                </span>
            </p>
            <p class="jsemaines">{{$enfants->dayOfPresence}}</p>
        </div>
    </div>
    <div class="timeline">
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">genre</p>
                <p>{{$nom->sexe}}</p>
                </div>
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full"src="https://www.svgrepo.com/show/230359/gender.svg" alt="">
                </div>
            </div>
        </div>
        <div class="containerProfil right">
            <div class="content">
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full"src="https://www.svgrepo.com/show/203133/ruler.svg" alt="">
                </div>
                <div class="texte">
                    <p class="soustitre">Taille</p>
                <p>{{$enfants->size}}</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">poids</p>
                <p>{{$enfants->weight}}</p>
                </div>
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full"src="https://www.svgrepo.com/show/229297/scale-weight.svg" alt="">
                </div>
            </div>
        </div>
        <div class="containerProfil right">
            <div class="content">
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full"src="https://www.svgrepo.com/show/385146/emergency-health-healthcare-hospital-kit-medical.svg"
                        alt="">
                </div>
                <div class="texte">
                    <p class="soustitre">allergies</p>
                <p>{{$enfants->allergy}}</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">Poussée des dents</p>
                <p>{{$enfants->teething}}</p>
                </div>
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full"src="https://www.svgrepo.com/show/385145/dental-dentist-health-healthcare-medical-teeth.svg"
                        alt="">
                </div>
            </div>
        </div>
        <div class="containerProfil right">
            <div class="content">
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full" src="https://www.svgrepo.com/show/267696/baby-food.svg" alt="">
                </div>
                <div class="texte">
                    <p class="soustitre">alimentation</p>
                    <p class="text-center">{{$enfants->nutritional}}</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">Autorisation photo</p>
                    <p>{{$enfants->picturePermission}}
                    </p>
                </div>
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full" src="https://www.svgrepo.com/show/6666/photo-camera.svg" alt="">
                </div>
            </div>
        </div>
        <div class="containerProfil right">
            <div class="content">
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full" src="https://www.svgrepo.com/show/13967/park.svg" alt="">
                </div>
                <div class="texte">
                    <p class="soustitre">Autorisation de sortie</p>
                    <p class="text-sm">{{$enfants->exitPermission}}</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">Surveillance des selles</p>
                    <p>{{$enfants->surveillanceSelles}}
                    </p>
                </div>
                <div class="w-16 h-16 p-4 flex justify-center items-center bg-[#D8E2DC] rounded-full">
                    <img class="w-full" src="https://www.svgrepo.com/show/295847/poo.svg" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
