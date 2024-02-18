<!DOCTYPE html>
<html class="custom-background" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="flex flex-col justify-center items-center mt-2">
    <a class="p-2 mt-4 m-2 rounded bg-[#252525] text-white transition duration-400 ease-in-out hover:bg-green-500" href="index.php" class="button-link">Retour à l'accueil</a>
    <?php
    // Connexion à la base de donnéess
    $conn = new mysqli("localhost", "root", "", "hacker-poulette");

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Exécuter la requête
    $reponse = $conn->query("SELECT * FROM users");
    ?>

    <table class="text-[aliceblue] flex flex-col items-center justify-between bg-[#171717] rounded-2xl m-8 p-8">
        <tr>
            <th class="px-2">id</th>
            <th class="px-2">Firstname</th>
            <th class="px-2">Lastname</th>
            <th class="px-2">Email Adress</th>
            <th class="px-2">File_path</th>
            <th class="px-2">Description</th>
        </tr>
        <?php
        while ($donnees = $reponse->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($donnees['id']); ?></td>
                <td><?php echo htmlspecialchars($donnees['firstname']); ?></td>
                <td><?php echo htmlspecialchars($donnees['lastname']); ?></td>
                <td><?php echo htmlspecialchars($donnees['email']); ?></td>
                <td><?php echo htmlspecialchars($donnees['file_path']); ?></td>
                <td><?php echo htmlspecialchars($donnees['description']); ?></td>
                <td>
                    <form action="dashboard.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">
                        <input class= "p-2 rounded bg-[#252525] text-white transition duration-400 ease-in-out hover:bg-green-500" type="submit" value="Traité">
                    </form>
                </td>
            </tr>
        <?php
        }
        $conn->close(); // Fermeture de la connexion
        ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
            $id = $_POST['id'];

            // Connexion à la base de données
            $conn = new mysqli("localhost", "root", "", "hacker-poulette");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Préparation de la requête de suppression
            $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);

            // Exécution de la requête
            if ($stmt->execute()) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();

            // Rediriger vers la page principale (ou toute autre page de votre choix)
            header("Location: dashboard.php");
            exit;
        }
        ?>

    </table>
</body>

</html>