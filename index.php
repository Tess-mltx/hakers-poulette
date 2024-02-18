<?php
require('connect.php');
?>
<!DOCTYPE html>
<div class="w-full h-full flex flex-col items-center justify-center text-aliceblue">
	<html class="custom-background">

	<head>
		<meta charset="utf-8">
		<title>Hacker Poulette - formulaire</title>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<link href="src/output.css" rel="stylesheet">
		<script type="module" defer src="js/script.js"></script>
		<script defer src="js/modules/connectadmin.js"></script>
	</head>

	<body class="flex flex-col items-center justify-center m-8">
		<header>
			<div class="flex items-center justify-end bg-[#171717] rounded-2xl m-8 pt-4 pb-4 pl-8 pr-8 ">
				<input class="mr-4 bg-transparent border-none outline-none w-full flex items-center justify-center gap-2 rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)] text-[aliceblue]" placeholder="Admin Password" type="password" name="adminpass" id="adminpass" value="" required minlength="2" maxlength="255">
				<button class="w-3/5 my-4 py-2 rounded bg-[#252525] text-white transition duration-400 ease-in-out hover:bg-green-500" type="submit" name="button" id="buttonadmin">Connect</button>
			</div>
		</header>

		<?php
		require_once 'autoload.php';
		if (isset($_POST['button'])) {
			$recaptcha = new \ReCaptcha\ReCaptcha("6LdzQ3UpAAAAAHGi9cxEJEPcBsh5-vvwlkfaaoyr");
			$gRecaptchaResponse = $_POST['g-recaptcha-response'];
			$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
				->verify($gRecaptchaResponse, $remoteIp);
			if ($resp->isSuccess()) {
				// Verified!
				echo "Success !";
			} else {
				$errors = $resp->getErrorCodes();
				var_dump($errors);
			}
		}
		?>
		<div class="w-full h-full flex items-center justify-center text-[aliceblue] m-0;">

			<form action="create_user.php" method="post">
				<div class="flex flex-col items-center justify-center bg-[#171717] rounded-2xl m-8 p-8">
					<h1 class="text-4xl mb-4">Create profile.</h1>
					<div class="form__body__content">
						<input class="mb-4 bg-transparent border-none outline-none w-full text-d3d3d3 flex self-center justify-center gap-2 rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)]" placeholder="Firstname" type="text" name="firstname" id="firstname" value="" required minlength="2" maxlength="255">
					</div>
					<div class="form__body__content">
						<input class="mb-4 bg-transparent border-none outline-none w-full text-d3d3d3 flex items-center justify-center gap-2 rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)]" placeholder="Lastname" type="text" name="lastname" id="lastname" value="" required minlength="2" maxlength="255">
					</div>
					<div class="form__body__content">
						<input class="mb-4 bg-transparent border-none outline-none w-full text-d3d3d3 flex items-center justify-center gap-2 rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)]" placeholder="E-mail adress" type="email" name="email" id="email" value="" required minlength="2" maxlength="255">
					</div>
					<div class="form__body__content">
						<input class="mb-4 bg-transparent border-none outline-none w-full text-d3d3d3 flex items-center justify-center gap-2 rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)]" placeholder="Description" type="textarea" name="description" id="description" value="" required minlength="2" maxlength="1000">
					</div>
					<div class="form__body__content">
						<label class="flex items-center justify-center gap-2 text-[#d3d3d3] rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)] cursor-pointer">
							<input type="file" name="file" id="file" accept="image/png, image/jpeg, image/gif" required />
						</label>
					</div>
					<form action="create_user.php" method="POST" class="mt-4">
						<div class="g-recaptcha" data-sitekey="6LdzQ3UpAAAAAHck6Y60GCABXhwLamGRCb91xhNP"></div>
						<br />
						<button class="w-3/5 my-4 py-2 rounded bg-[#252525] text-white transition duration-400 ease-in-out hover:bg-green-500" type="submit" name="button" id="button">Send</button>
					</form>
				</div>
			</form>
		</div>

	</body>
	</html>
</div>