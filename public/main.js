const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu-principale');

    hamburger.addEventListener('click', () => {
    menu.classList.toggle('show');
});

const linkPrenota = document.getElementById('open-prenota');
const formPrenota = document.getElementById('form-prenotazione');
const body=document.getElementById("body")

linkPrenota.addEventListener('click', function(e) {
    e.preventDefault();
    formPrenota.classList.toggle('attivo');
});

body.addEventListener('click', function(e){
    if (formPrenota.classList.contains('attivo') && !formPrenota.contains(e.target) &&
        e.target !== linkPrenota) {
        formPrenota.classList.remove('attivo');
    }
})