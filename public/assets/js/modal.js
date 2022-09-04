//modal apparition
let btnClock = document.getElementById("btnClock");
let modalClock = document.getElementById("modalClock")
let btnHumeur = document.getElementById("btnHumeur");
let modalHumeur = document.getElementById("modalHumeur")
let btnActivite = document.getElementById("btnActivite");
let modalActivite = document.getElementById("modalActivite")
let btnRepas = document.getElementById("btnRepas");
let modalRepas = document.getElementById("modalRepas")
let btnSleep = document.getElementById("btnSleep");
let modalSleep = document.getElementById("modalSleep")
let btnChange = document.getElementById("btnChange");
let modalChange = document.getElementById("modalChange")
let btnBlessure = document.getElementById("btnBlessure");
let modalBlessure = document.getElementById("modalBlessure")
let btnSante = document.getElementById("btnSante");
let modalSante = document.getElementById("modalSante")
let btnFievre = document.getElementById("btnFievre");
let modalFievre = document.getElementById("modalFievre")
let btnDiarrhe = document.getElementById("btnDiarrhe");
let modalDiarrhe = document.getElementById("modalDiarrhe")

let modalArray = [

    modalClock,
    modalHumeur,
    modalActivite,
    modalRepas,
    modalSleep,
    modalChange,
    modalBlessure,
    modalSante,
    modalFievre,
    modalDiarrhe
]
btnClock.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalClock.classList.remove("hidden");
})
btnHumeur.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalHumeur.classList.remove("hidden");
})
btnActivite.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalActivite.classList.remove("hidden");
})
btnRepas.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalRepas.classList.remove("hidden");
})
btnSleep.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalSleep.classList.remove("hidden");
})
btnChange.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalChange.classList.remove("hidden");
})
btnBlessure.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalBlessure.classList.remove("hidden");
})
btnSante.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalSante.classList.remove("hidden");
})
btnFievre.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalFievre.classList.remove("hidden");
})
btnDiarrhe.addEventListener("click", () => {
    for (let index = 0; index < modalArray.length; index++) {
        modalArray[index].classList.add("hidden");
    }
    modalDiarrhe.classList.remove("hidden");
})

//heure actuelle
let heureActuelle = document.querySelector('#heureActuelle')

function hour() {
    let currentTime = new Date();
    let minutes = ('0' + currentTime.getMinutes()).slice(-2);
    let time = currentTime.getHours() + ' : ' + minutes;
    heureActuelle.innerHTML = time;
}

hour(), setInterval(hour, 6000)

let rangeSlider = document.getElementById("rs-range-line");
let rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
    rangeBullet.innerHTML = rangeSlider.value + '°C';
}
//calendar

function affichageJournalier(x)
{

}
