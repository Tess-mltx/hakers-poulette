<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hacker Poulette - formulaire</title>
    <link rel="stylesheet" href="style/style.scss" />
    <script type="module" defer src="js/script.js"></script>
</head>
<body>
	<h1>Create profile</h1>
	<form action="create_user.php" method="post" enctype="multipart/form-data" >
		<div>
			<label for="fistname">Firstname</label>
			<input type="text" name="firstname" id="firstname" value="" required minlength="2" maxlength="255">
		</div>
		<div>
			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" id="lastname" value="" required minlength="2" maxlength="255">
		</div>
            <label for="email">E-mail adress</label>
			<input type="email" name="email" id="email" value="" required minlength="2" maxlength="255">
		
		<div>
			<label for="file">Picture's profile</label>
            <input type="file" name="file" id="file" accept=".png, .jpeg, .gif"/>		
        </div>

		<div>
			<label for="description">Description</label>
			<input type="textarea" name="description" id="description" value="" required minlength="2" maxlength="1000">
		</div>
		<button type="submit" name="button" id="button">Envoyer</button>
	</form>
</body>
</html>
