<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include("common-files/library-header.php"); ?>
</head>
<body class="demo-6">
	<?php include("common-files/loader.php"); ?>
	<main class="main main--demo-6">
		<!--Menu-->
		<?php include("common-files/menu.php"); ?>
		<!--End Menu-->
		<section class="form-container">
			<div class="txt-form">
				<a href="./" class="link-back"><img src="assets/images/iconos/arrow-back.svg" alt="back" class="arrow-back"></a>
				<div class="lines-w-container">
					<img src="assets/images/iconos/lines-1.svg" class="lines-w" alt="Lines">
					<img src="assets/images/iconos/lines-1.svg" class="lines-w-2" alt="Lines">
				</div>
				<div class="container-txt-form">
					<h3 class="animated fadeInLeft delay-1-4">H<span>O</span>LA</h3>
					<p class="animated fadeInLeft delay-2">Si tienes algún proyecto en mente, alguna duda o requieres consultoría de algún tipo no dudes en contactarme en el siguiente formulario:</p>
				</div>
			</div>
			<div class="container-formall">
				<form id="theForm" class="simform" autocomplete="off"  action="assets/php/mail.php" method="POST">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">¿Cómo te llamas?</label></span>
								<input id="q1" name="name" type="text"/>
							</li>
							<li>
								<span><label for="q2">¿Cuál es tu correo?</label></span>
								<input id="q2" name="email" type="email"/>
							</li>
							<li>
								<span><label for="q3">¿Qué necesitas?</label></span>
								<input id="q3" name="area" type="text" placeholder="Diseño Web, Motion graphics, solo saludar :)"/>
							</li>
							<li>
								<span><label for="q4">¿Cómo me encontraste?</label></span>
								<input id="q4" name="encontrar" type="text" placeholder="Deep web, Linkedin, etc."/>
							</li>
							<li>
								<span><label for="q5">¿Tienes algún comentario extra?</label></span>
								<input id="q5" name="comentario" type="text"/>
							</li>
						</ol><!-- /questions -->
						<button class="submit" type="submit">Enviar respuestas</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->
			</div>			
		</section>
	</main>
	<!--Btn Up-->
	<?php include("common-files/btn-up.php"); ?>
	<!--End Btn Up-->
	<!--LibraryFooter-->
	<?php include("common-files/library-footer.php"); ?>
</body>
</html>