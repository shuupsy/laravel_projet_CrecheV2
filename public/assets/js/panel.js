/* Sidebar */
let sidebar = document.querySelector('.sidebar')
let burger = document.querySelectorAll('.btn')

function Burger () {
    sidebar.classList.toggle('open')
    burger.classList.toggle('bx-x')
}

/* PANEL */
panelBtn = document.querySelectorAll('.panelBtn') // Tous les icônes
modalWindow = document.querySelectorAll('.modalWindow') // Toutes les modals

panelBtn.forEach((button, index) => {
    button.addEventListener("click", () => { // au clic

        if (button.classList.contains('panelActive')) { // Checker la condition pour fermer le modal au 2ème clic
            button.classList.remove('panelActive');
            modalWindow[index].classList.add('hidden')
        }
        else {
            for (let i = 0; i < modalWindow.length; i++) { // Réinitialisation des autres modals
                modalWindow[i].classList.add('hidden') // Cacher tous les modals
                panelBtn[i].classList.remove('panelActive'); // Enlever bgcolor
                button.classList.add('panelActive'); // Ajouter bgcolor sur icône cliqué
                modalWindow[index].classList.remove('hidden') // Afficher le modal de l'icôné sélectionné
            }
        }
    })
});

/* Fermeture de modal avec bouton X */
let closemodal = document.querySelectorAll('.close-x')

closemodal.forEach((close, index) => {
    close.addEventListener('click', () => {
        modalWindow[index].classList.add("hidden") // Cache modal
        panelBtn[index].classList.remove('panelActive') // Enlève couleur
    })
})


/* Modal Horaire */
let heureActuelle = document.querySelector('#heureActuelle')

function hour() {
    let currentTime = new Date();
    let minutes = ('0' + currentTime.getMinutes()).slice(-2);
    let time = currentTime.getHours() + ' : ' + minutes;
    heureActuelle.innerHTML = time;
}

hour(), setInterval(hour, 6000)


/* Modal Température */
let rangeSlider = document.getElementById("rs-range-line");
let rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
    rangeBullet.innerHTML = rangeSlider.value + '°C';
}


