<?php

header('Content-Type: application/json');
session_start();

function badRequest($response)
{
	header("HTTP/1.0 400 Bad Request");
	echo json_encode($response);
	die;
}

// Obtenemos el token
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

	if (empty($_SESSION['token'])) {
		$_SESSION['token'] = bin2hex(random_bytes(32));
	}

	$token = $_SESSION['token'];
	echo json_encode(['token' => $token]);
	die;
}

//
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['token'])) {
	if (isset($_POST['token']) && !empty($_POST['token'])) {

		// Si el token no es válido
		if (!hash_equals($_SESSION['token'], $_POST['token'])) {

			badRequest(['message' => 'El token no es válido']);
		}

		$safePost = filter_input_array(INPUT_POST, [
			"nombre" => FILTER_SANITIZE_STRING,
			"email" => FILTER_SANITIZE_EMAIL,
			"mensaje" => FILTER_SANITIZE_STRING
		]);

		//if (!filter_var($safePost['email'], FILTER_VALIDATE_EMAIL)) {
			//badRequest(['message' => 'No es un email válido']);
		//} else {
			$header = 'From: melalmanza@gmail.com' . "\r\n";
			$header.= 'Reply-To: melalmanza@gmail.com' . "\r\n";
			$header.= 'X-Mailer: PHP/' . phpversion();

			$mensaje = 'Alguien te envio un correo desde http://www.designmel.com' . "\r\n";
			$mensaje.= 'Nombre: ' . $safePost['nombre'] . "\r\n";
			$mensaje.= 'Correo: ' . $safePost['email'] . "\r\n";
			$mensaje.= 'Mensaje: ' . $safePost['mensaje'] . "\r\n";

			$mail = mail('melalmanza@gmail.com','Correo de designmel', $mensaje, $header);
		//}

		unset($_SESSION['token']);
		echo json_encode(['message' => 'ok']);
		die;

		// Save in mysql
		//saveToDatabase($safePost);


	}
}

badRequest(['message' => 'El token ya no es válido, solicita otro']);
?>
