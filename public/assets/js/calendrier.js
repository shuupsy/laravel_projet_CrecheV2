const liens = document.querySelectorAll('.liens')
const contenuJour = document.querySelectorAll('.contenuJour');
const planetes = document.querySelectorAll('.planetes');
const date = document.querySelectorAll('.date');


liens.forEach((lien, index) => {
    lien.addEventListener('click', () => {
        contenuJour.forEach(content => {
            content.classList.remove('actived');
        });
        liens.forEach(lien => {
            lien.classList.remove('activeDay');
        });
        planetes.forEach(planete => {
            planete.classList.remove('actived');
        });
        date.forEach(jour => {
            jour.classList.remove('actived');
        });


        contenuJour[index].classList.add('actived');
        liens[index].classList.add('activeDay');
        planetes[index].classList.add('actived');
        date[index].classList.add('actived');
    })

})
