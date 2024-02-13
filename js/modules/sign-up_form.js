const firstname = document.querySelector('#firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const avatar = document.getElementById('avatar');
const description = document.getElementById('description');
const submit = document.querySelector('#button')

firstname.addEventListener("keyup", () => {
    verificationText(firstname, 2, 255);
});
lastname.addEventListener("keyup", () => {
    verificationText(lastname, 2, 255);
});
description.addEventListener("keyup", () => {
    verificationText(description, 2, 1000);
});


submit.addEventListener('click', (event) => {
    event.preventDefault(); // Empêcher l'envoi du formulaire par défaut
    verificationDataForm();
});

function verificationDataForm() {
    //  function to verify form
    verificationText(firstname, 2, 255);
    verificationText(lastname, 2, 255);
    verificationText(description, 2, 1000);
    verificationEmail();
    verificationAvatar();
};

function verificationText(input, min, max) {
    let precedErrorMsg = input.parentElement.querySelectorAll('.error-msg');
    precedErrorMsg.forEach(msg => msg.remove());
    console.log(input.value); // Ajoutez cette ligne de log pour voir la valeur de l'input

    if (input.value.length < min || input.value.length > max) {
        const selectedInput = input;
        let errorMsg = document.createElement('p');
        errorMsg.classList.add('error-msg');
        errorMsg.appendChild(document.createTextNode(`Ce champ doit contenir entre ${min} et ${max} caractères`));
        selectedInput.after(errorMsg);
    }
};

function verificationEmail() {
    
};

function verificationAvatar() {
    if (avatar );
};