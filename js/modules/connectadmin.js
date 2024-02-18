
document.getElementById('buttonadmin').addEventListener('click', function(event) {
    event.preventDefault();

    const enteredAdminPassword = document.getElementById('adminpass').value;

    if (enteredAdminPassword === 'admin') {
        alert("Mot de passe administrateur correct. Redirection vers la page d'administration.");
        window.location.href = 'dashboard.php';
    } else {
        alert('Mot de passe administrateur incorrect.');
    }
});

