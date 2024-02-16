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
	</head>

	<header>
		<div class="flex items-center justify-end bg-[#171717] rounded-2xl m-8 pt-4 pb-4 pl-8 pr-8 text-aliceblue">
			<input class="mr-4 bg-transparent border-none outline-none w-full text-aliceblue flex items-center justify-center gap-2 rounded-full p-2 bg-[#171717] shadow-[inset_2px_5px_10px_rgb(5,5,5)]" placeholder="Admin Password" type="adminpass" name="adminpass" id="adminpass" value="" required minlength="2" maxlength="255">
			<button class="w-3/5 my-4 py-2 rounded bg-[#252525] text-white transition duration-400 ease-in-out hover:bg-green-500" type="submit" name="button" id="button">Connect</button>
		</div>
	</header>

	<body class="flex flex-col items-center justify-center m-8">
	

	<?php
		require_once 'autoload.php';
			if(isset($_POST['button'])){
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
				<div class="flex flex-col items-center justify-center bg-[#171717] rounded-2xl m-8 p-8 text-aliceblue">
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
							<input class="hidden" type="file" name="file" id="file" accept="image/png, image/jpeg, .gif" required />
							Add Avatar
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
								<path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h9v2H5v14h14v-9h2v9q0 .825-.587 1.413T19 21zM17 9V7h-2V5h2V3h2v2h2v2h-2v2zM6 17h12l-3.75-5l-3 4L9 13zM5 5v14z" />
							</svg>
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