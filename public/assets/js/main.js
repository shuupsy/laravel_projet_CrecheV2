/* NAVBAR */
let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.sidebar')

btn.onclick = function () {
    sidebar.classList.toggle('open')
}

/* NAVBAR (mobile) */
let burger = document.querySelector('#burger')
burger.onclick = function () {
    sidebar.classList.toggle('open')
    burger.classList.toggle('bx-x')
}

// Apparition de modal
let openModal = document.querySelectorAll(".buttonModal");
let modalFull = document.querySelectorAll(".modalFull");
let closemodal = document.querySelectorAll('.close-x')
let main = document.querySelector('.contenu')

openModal.forEach((button, index) => {
    button.addEventListener("click", () => {
        modalFull[index].classList.toggle("hidden")
    });
} )

// Fermeture de modal
closemodal.forEach((close, index) => {
    close.addEventListener('click', () => {
        modalFull[index].classList.toggle("hidden")
    })
})

// Fermeture modal

// Heure actuelle
let clock = document.querySelector('#clock')

function hour(){
    let currentTime = new Date();
    let minutes = ('0'+ currentTime.getMinutes()).slice(-2);
    let time = currentTime.getHours() + ' : ' + minutes;
    clock.innerHTML = time;
}

hour(), setInterval(hour, 6000)


// Fièvre
let rangeSlider = document.getElementById("rs-range-line");
let rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
  rangeBullet.innerHTML = rangeSlider.value + '°C';
}
