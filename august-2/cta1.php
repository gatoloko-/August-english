<?php
$ma = $_POST['mail'];
    function not($ma){
	$to = 'contacto@augustenglishchile.com';
	$subject = 'Alguien tomó la prueba de ingles.';
	$message = ''.$ma.' tomó la prueba de ingles.';
	mail($to, $subject, $message);
}
	not($ma);
?>