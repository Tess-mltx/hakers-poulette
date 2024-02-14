<?php
require('connect.php');

if (isset($_POST['button'])) {
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $avatar = isset($_FILES['avatar']) ? $_FILES['avatar'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';        

        if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($description)){
            
            if (isset($_FILES['avatar']) && $_FILES['image']['error'] == 0) {
                $data = file_get_contents($_FILES['avatar']['tmp_name']);

                $query = $bdd->prepare('INSERT INTO users (firstname, lastname, email, file_path, description) VALUES (:firstname, :lastname, :email, :avatar, :description)');
                $query->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':avatar' => $avatar, ':description' => $description));
            } else {
                $query = $bdd->prepare('INSERT INTO users (firstname, lastname, email, description) VALUES (:firstname, :lastname, :email, :description)');
                $query->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':description' => $description));
            }

            // add msg to confirm sending form ?
            // header("Location: ");
            exit();
        } else {
            echo "Veuillez remplir tous les champs du formulaire.";
        }
} 
?>