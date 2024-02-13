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
	<div class="form-container">

		<form class="form__body" action="create_user.php" method="post">
			<h1 class="form__body__title">Create profile.</h1>
			<div clas="form__body__content">
				<label for="fistname">Firstname</label>
				<input type="text" name="firstname" id="firstname" value="" required minlength="2" maxlength="255">
			</div>
			<div clas="form__body__content">
				<label for="lastname">Lastname</label>
				<input type="text" name="lastname" id="lastname" value="" required minlength="2" maxlength="255">
			</div>
			<div clas="form__body__content">
				<label for="email">E-mail adress</label>
				<input type="email" name="email" id="email" value="" required minlength="2" maxlength="255">
			</div>
			<div clas="form__body__content">
				<label for="description">Description</label>
				<input type="textarea" name="description" id="description" value="" required minlength="2" maxlength="1000">
			</div>
			<div clas="form__body__content">
				<label for="file"></label>
				<input type="file" name="file" id="file" accept="image/png, image/jpeg, .gif" required />
			</div>
			<button class="button__submit" type="submit" name="button" id="button">Envoyer</button>
		</form>
	</div>
</body>

</html>