<?php
require('connect.php');
require('send_email.php');

if (isset($_POST['button'])) {
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $avatar = isset($_POST['avatar']) ? $_POST['avatar'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';        

        if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($description)){    
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // J'ajoute la validation mail cross figer !
                echo "Email address '$email' is considered valid.\n";
                if (!empty($avatar['name']) && $avatar['error'] === UPLOAD_ERR_OK) { // completer la condition si le file a load dans le form
                    $target_dir = "assets/avatars_users/";
                    $target_file = $target_dir . basename($_FILES['file']['name']);
                    $uploadOk = 1; // ca c'est un score pour vérifier que l'img est ok
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // Vérifier si le fichier est une image
                    $check = getimagesize($avatar["tmp_name"]); // si la methode fonctionne c'est que c'est une img
                    if($check !== false) {
                        echo "Le fichier est une image - " . $check["mime"] . "."; // type MIME du média
                        $uploadOk = 1;
                    } else {
                        echo "Le fichier n'est pas une image.";
                        $uploadOk = 0;
                    }  
                    // Si tout est ok déplacer le fichier vers le dossier
                    if ($uploadOk == 1 && move_uploaded_file($avatar["tmp_name"], $target_file)) {

                        $query = $bdd->prepare('INSERT INTO users (firstname, lastname, email, file_path, description) VALUES (:firstname, :lastname, :email, :avatar, :description)');
                        $query->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':avatar' => $target_file, ':description' => $description));

                        echo "Le fichier ". htmlspecialchars(basename($avatar["name"])) . " a été téléchargé et les informations ont été enregistrées dans la base de données.";
                    } else {
                        echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
                    }
                } else {
            
                $query = $bdd->prepare('INSERT INTO users (firstname, lastname, email, description) VALUES (:firstname, :lastname, :email, :description)');
                $query->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':description' => $description));

                echo "Les informations ont été enregistrées dans la base de données.";
                }

                sendEmail($email, $firstname);
                // header("Location: index.php");
                exit();
        
            } else {
                echo "l'adresse mail '$email' est invalide.\n";
            }

    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
} 
?>