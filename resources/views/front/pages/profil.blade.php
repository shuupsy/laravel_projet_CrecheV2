@extends("front.layout.index")
@section("content")
<div class="contenuProfil">
    <div class="infosGen">
        <p class="prenom">prenom</p>
        <p> <img class="bg-[#CDD3DF] w-24 h-24 rounded-full p-4 my-4" src="/assets/img/baby.svg"
                alt=""></p>
        <div class="presences">
            <p class="donneesPresence">
                <span class="jour">3</span>
                <span class="joursPresence">Jours
                    <span class="semaine">par semaine</span>
                </span>
            </p>
            <p class="jsemaines">lundi/mardi/mercredi</p>
        </div>
    </div>
    <div class="timeline">
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">genre</p>
                <p>genre</p>
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
                    <p class="soustitre">height</p>
                <p>height</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">weight</p>
                <p>weight</p>
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
                <p>allergies</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">Teething</p>
                <p>teething</p>
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
                    <p class="text-center">alimentation</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">Picture autorisation</p>
                    <p>picture autorisation
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
                    <p class="soustitre">exit Permission</p>
                    <p class="text-sm">exit permission</p>
                </div>
            </div>
        </div>
        <div class="containerProfil left">
            <div class="content">
                <div class="texte">
                    <p class="soustitre">Feces observations</p>
                    <p>feces observations
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
