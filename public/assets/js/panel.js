/* PANEL */
panelBtn = document.querySelectorAll('.panelBtn') // Tous les icônes
modalWindow = document.querySelectorAll('.modalWindow') // Toutes les modals

panelBtn.forEach((button,index) => {
    button.addEventListener("click", () => { // au clic
        for (let i=0; i < modalWindow.length; i++) { // Réinitialisation
            modalWindow[i].classList.add('hidden') // Cacher tous les modals
            panelBtn[i].classList.remove('panelActive'); // Enlever bgcolor
        }
        button.classList.toggle('panelActive'); // Ajout bgcolor
        modalWindow[index].classList.toggle('hidden') // Ouvrir le modal
    })
});

/* Horaire */
let heureActuelle = document.querySelector('#heureActuelle')

function hour() {
    let currentTime = new Date();
    let minutes = ('0' + currentTime.getMinutes()).slice(-2);
    let time = currentTime.getHours() + ' : ' + minutes;
    heureActuelle.innerHTML = time;
}

hour(), setInterval(hour, 6000)


/* Température */
let rangeSlider = document.getElementById("rs-range-line");
let rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
    rangeBullet.innerHTML = rangeSlider.value + '°C';
}
