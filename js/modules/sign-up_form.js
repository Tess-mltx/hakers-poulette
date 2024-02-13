const submit = document.querySelector('#button')

submit.addEventListener('click', () => {
    //  worck-flow event
});

function verificationDataForm() {
    //  function to verify form
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const email = document.getElementById('email').value;
    const avatar = document.getElementById('avatar');
    const description = document.getElementById('description').value;

    verificationText(firstname, 2, 255);
    verificationText(lastname, 2, 255);
    verificationText(description, 2, 1000);

};

function verificationText(input, min, max) {
    if (input < min || input > max) {
        // inssert text in form
    }
};

function verificationEmail() {
    
};

function verificationAvatar() {
    if (avatar )
}

