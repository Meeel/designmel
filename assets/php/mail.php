<?php
	if($_POST){

		// Información para el administrador
			$correo ='melalmanza@gmail.com';
			$adminsub = "Contacto designmel";
			$adminmen = "<p>Nombre: ".$_POST['name']." </p>
						 <p>Email: ".$_POST['email']." </p>
						 <p>Que necesita: ".$_POST['area']." </p>
						 <p>En donde me encontraste: ".$_POST['encontrar']." </p>
						  <p>Comentario: ".$_POST['comentario']." </p>
						 ";
		// Información para el usuario
			$usersub = "Gracias por contactarme";
			$usermen = '
					<p>Hola '.$_POST["name"].'</p>
					<p>Gracias por escribirme, te confirmamo que he recibido tu correo y en breve me comunicaré contigo para brindarte la información que necesites. Quedo a tus órdenes. ¡Saludos!</p>';

		// Cabeceras
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'From: Admin <melalmanza@gmail.com>' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Correo administrador
			mail($correo, $adminsub, $adminmen, $cabeceras);
		// Correo usuario
			//mail($_POST["email"], $usersub, $usermen, $cabeceras);
			
	}
?>
