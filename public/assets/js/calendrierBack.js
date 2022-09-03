const liens = document.querySelectorAll('.liens')
const contenuJour = document.querySelectorAll('.contenuJour');


liens.forEach((lien, index) => {
    lien.addEventListener('click', () => {
        contenuJour.forEach(content => {
            content.classList.remove('actived');
        });
        liens.forEach(lien => {
            lien.classList.remove('activeDay');
        });

        contenuJour[index].classList.add('actived');
        liens[index].classList.add('activeDay');
    })

})
