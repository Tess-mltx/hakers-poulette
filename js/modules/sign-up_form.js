const firstname = document.querySelector('#firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const avatar = document.getElementById('file');
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

avatar.addEventListener('change', () => {
    verificationAvatar(avatar);
});

email.addEventListener("keyup", () => {
    verificationEmail(email);
});

function verificationText(input, min, max) {
    let precedErrorMsg = input.parentElement.querySelectorAll('.error-msg');
    precedErrorMsg.forEach(msg => msg.remove());

    if (input.value.length < min || input.value.length > max) {
        const selectedInput = input;
        let errorMsg = document.createElement('p');
        errorMsg.classList.add('error-msg');
        errorMsg.appendChild(document.createTextNode(`Ce champ doit contenir entre ${min} et ${max} caractères`));
        selectedInput.after(errorMsg);
    }
};

function verificationEmail(email) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
    {
      return (true)
    } else { // je devrais créer une fct showMessage pour etre plus prorpe
      console.log("invalid email address")
      return (false)
    }
};

function verificationAvatar(avatar) {
    var validTypes = ['.jpeg', '.png', '.gif'];

    if (avatar.files.length > 0) {
        for (const i = 0; i <= avatar.files.length - 1; i++) {

            const fsize = avatar.files.item(i).size;
            const file = Math.round((fsize / 1024));
            // plus grand que 2MB
            if (file > 2048) {
                alert(
                    "File too Big, please select a file less than 4mb");

            } else {
                console.log(file + 'KB');
                return validTypes.includes(avatar.type);
            }
        }
    }

};