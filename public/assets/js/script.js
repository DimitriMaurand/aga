//////////////////////////////////////////////////////////////////////////////
// Fonction pour générer un nombre aléatoire entre 10000 et 99999 (5 chiffres)
//////////////////////////////////////////////////////////////////////////////

function generateurRandomNumber() {
    const min = 10000;
    const max = 99999;
    const randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
    return randomNumber;
}

// Fonction appelée au clic
function genererNombreAleatoire() {

    const NombreAleatoire = document.getElementById('NombreAleatoire');

    const randomNum = generateurRandomNumber();

    NombreAleatoire.textContent = `${randomNum}`;
}

//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
//Apparition et disparition d'une DIV 1 à une div2
//////////////////////////////////////////////////////////////////////////////

function toggleDivs() {
    const div1 = document.getElementById('div1');
    const div2 = document.getElementById('div2');

    div1.classList.toggle('hidden');
    div2.classList.toggle('hidden');
}

//Retour
function toggleDivsRetour() {
    const div1 = document.getElementById('div1');
    const div2 = document.getElementById('div2');

    div2.classList.toggle('hidden');
    div1.classList.toggle('hidden');
}

////////////////////////////////////////////////////////////////////////////////
//Apparition et disparition d'une DIV 4 à une div5
//////////////////////////////////////////////////////////////////////////////
// const button = document.getElementById('toggleButton');


// button.addEventListener('click', function () {
//     const div4 = document.querySelector('.div4');
//     const div5 = document.querySelector('.div5');

//     div4.classList.toggle('hidden');
//     div5.classList.toggle('hidden');
// });

function toggleDivs2() {
    console.log("la");
    const div1 = document.getElementById('div1');
    const div3 = document.getElementById('div3');

    div1.classList.toggle('hidden');
    div3.classList.toggle('hidden');
}

//Retour
function toggleDivsRetour2() {
    const div1 = document.getElementById('div1');
    const div3 = document.getElementById('div3');

    div3.classList.toggle('hidden');
    div1.classList.toggle('hidden');
}


/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////
//une checkbox coche les autres
/////////////////////////////////////////////////////////////////////////////////

function toggleCheckboxes() {
    const masterCheckbox = document.getElementById('masterCheckbox');
    const childCheckboxes = document.querySelectorAll('.childCheckbox');

    for (const checkbox of childCheckboxes) {
        checkbox.checked = masterCheckbox.checked;
    }
}