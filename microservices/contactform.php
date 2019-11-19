<?php

$email_list = array( "melalmanza@gmail.com" );

$name = filter_var( $_POST[ "name" ] ,FILTER_SANITIZE_STRING );
$email = filter_var( $_POST[ "email" ] ,FILTER_SANITIZE_STRING );
$msg = filter_var( $_POST[ "msg" ] ,FILTER_SANITIZE_STRING );

$email_tmpl = file_get_contents( __DIR__ . "/templates/contactform-email.html" );

$email_html = str_replace( "{NAME}", $name, $email_tmpl);
$email_html = str_replace( "{EMAIL}", $email, $email_html);
$email_html = str_replace( "{MSG}", $msg, $email_html);



$subject = "Mensaje de usuario: " . $name;

$header = "From:contacto@designmel.com \r\n";
$header .= "Cc:mel@designmel.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

for( $i = 0; $i < count( $email_list ); $i++ ) {
	$to = $email_list[ $i ];
	$retval = mail( $to, $subject, $email_html, $header );	
}

// $retval = mail( $to, $subject, $email_html, $header );

if( $retval == true ) {
	echo json_encode( "ok" );
}else {
	echo json_encode( ":(" );
}

?>