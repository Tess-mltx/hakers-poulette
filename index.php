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
			<div class="form__body__content">
				<input placeholder="Firstname"  type="text" name="firstname" id="firstname" value="" required minlength="2" maxlength="255">
			</div>
			<div class="form__body__content">
				<input placeholder="Lastname" type="text" name="lastname" id="lastname" value="" required minlength="2" maxlength="255">
			</div>
			<div class="form__body__content">
				<input placeholder="E-mail adress" type="email" name="email" id="email" value="" required minlength="2" maxlength="255">
			</div>
			<div class="form__body__content">
				<input placeholder="Description" type="textarea" name="description" id="description" value="" required minlength="2" maxlength="1000">
			</div>
			<div class="form__body__content">
				<label class="form__body__content__file">
					
				<input type="file" name="file" id="file" accept="image/png, image/jpeg, .gif" />
				Add Avatar<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h9v2H5v14h14v-9h2v9q0 .825-.587 1.413T19 21zM17 9V7h-2V5h2V3h2v2h2v2h-2v2zM6 17h12l-3.75-5l-3 4L9 13zM5 5v14z"/></svg>
				</label>
			</div>
			<button class="button__submit" type="submit" name="button" id="button">Send</button>
			<h2>TEST</h2>
		</form>
	</div>

</body>

</html>