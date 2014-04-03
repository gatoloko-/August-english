<?php
require 'pm/PHPMailerAutoload.php';
$ma = $_POST['mail'];

function not($ma){
	$to = 'contacto@augustenglishchile.com';
	$subject = 'Alguien descargó la guia de verbos.';
	$message = ''.$ma.' descargó la guia de vervos.';
	mail($to, $subject, $message);
}
not($ma);
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.augustenglishchile.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contacto@augustenglishchile.com';                            // SMTP username
$mail->Password = '5antiago';                           // SMTP password

$mail->From = 'contacto@augustenglishchile.com';
$mail->FromName = 'August english Chile';
$mail->addAddress($ma);               // Name is optional
$mail->addReplyTo('contacto@augustenglishchile.com', 'Contacto');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/home/users/web/b365/ipg.pixicl/testing/guide.pdf');         // Add attachments
$mail->isHTML(false);                                  // Set email format to HTML

$mail->Subject = 'Tu guia de verbos';
$mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Really Simple HTML Email Template</title>
<style>
/* -------------------------------------
		GLOBAL
------------------------------------- */
* {
	margin: 0;
	padding: 0;
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	font-size: 100%;
	line-height: 1.6;
}

img {
	max-width: 100%;
}

body {
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: none;
	width: 100%!important;
	height: 100%;
}


/* -------------------------------------
		ELEMENTS
------------------------------------- */
a {
	color: #348eda;
}

.btn-primary {
	text-decoration: none;
	color: #FFF;
	background-color: #348eda;
	border: solid #348eda;
	border-width: 10px 20px;
	line-height: 2;
	font-weight: bold;
	margin-right: 10px;
	text-align: center;
	cursor: pointer;
	display: inline-block;
	border-radius: 25px;
}

.btn-secondary {
	text-decoration: none;
	color: #FFF;
	background-color: #aaa;
	border: solid #aaa;
	border-width: 10px 20px;
	line-height: 2;
	font-weight: bold;
	margin-right: 10px;
	text-align: center;
	cursor: pointer;
	display: inline-block;
	border-radius: 25px;
}

.last {
	margin-bottom: 0;
}

.first {
	margin-top: 0;
}

.padding {
	padding: 10px 0;
}


/* -------------------------------------
		BODY
------------------------------------- */
table.body-wrap {
	width: 100%;
	padding: 20px;
}

table.body-wrap .container {
	border: 1px solid #f0f0f0;
}


/* -------------------------------------
		FOOTER
------------------------------------- */
table.footer-wrap {
	width: 100%;	
	clear: both!important;
}

.footer-wrap .container p {
	font-size: 12px;
	color: #666;
	
}

table.footer-wrap a {
	color: #999;
}


/* -------------------------------------
		TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
	font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	line-height: 1.1;
	margin-bottom: 15px;
	color: #000;
	margin: 40px 0 10px;
	line-height: 1.2;
	font-weight: 200;
}

h1 {
	font-size: 36px;
}
h2 {
	font-size: 28px;
}
h3 {
	font-size: 22px;
}

p, ul, ol {
	margin-bottom: 10px;
	font-weight: normal;
	font-size: 14px;
}

ul li, ol li {
	margin-left: 5px;
	list-style-position: inside;
}


/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
	display: block!important;
	max-width: 600px!important;
	margin: 0 auto!important; /* makes it centered */
	clear: both!important;
}

/* Set the padding on the td rather than the div for Outlook compatibility */
.body-wrap .container {
	padding: 20px;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
	max-width: 600px;
	margin: 0 auto;
	display: block;
}


.content table {
	width: 100%;
}

</style>
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<!-- content -->
			<div class="content">
			<table>
				<tr>
					<td>
						<img src="http://augustenglishchile.com/ima/augustenglish_logo.jpg" />
					</td>
				</tr>
				<tr>
					<td>
						<p>Hola!</p>
						<p>Muchas gracias por tu inter&eacute;s. Ojal&aacute; que encuentres esta gu&iacute;a muy &uacute;til en tu camino para aprender ingl&eacute;s. Te contactaremos pronto para contarte más acerca de nuestras clases en AUGUST ENGLISH.
Nos puedes env&iacute;ar un correo a contacto@augustenglishchile.com o llamarnos a +562 2664 7940..</p>
						<h1>AUGUST ENGLISH</h1>
						<p>Aprender ingl&eacute;s es uno de los primeros pasos para reinventarte personal y profesionalmente. 
							Deseamos ayudarte a renacer en tu vida, ofreci&eacute;ndote clases accesibles y flexibles que puedan 
							lanzarte a tu nuevo futuro.</p>

						<h1>NUESTRA HISTORIA</h1>

						<p>August English se enorgullece de ser uno de los institutos m&aacute;s din&aacutemicos de Chile, especializado 
							en la educaci&oacuten de adultos profesionales. Ofrecemos clases de ingl&eacute;s conversacional, incluso para 
							la preparaci&oacuten de ex&aacute;menes, entrevistas y una gran variedad de cursos dise&ntilde;ados para industrias 
							espec&iacute;ficas.</p>
						
					</td>
				</tr>
			</table>
			</div>
			<!-- /content -->
			
		</td>
		<td></td>
	</tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">
			
			<!-- content -->
			<div class="content">
				<table>
					<tr>
						<td align="center">
							<p>
							contacto@augustenglishchile.com<br/>
							<a href="http://www.augustenglishchile.com">www.augustenglishchile.com</a><br />
							San Antonio 50, Of. 303<br/>
							Santiago Centro, Santiago<br />
							Metro Santa Lucia<br />
						
						</p>
						</td>
					</tr>
				</table>
			</div>
			<!-- /content -->
			
		</td>
		<td></td>
	</tr>
</table>
<!-- /footer -->

</body>
</html>';

$mail->AltBody = 'Hola!
						Muchas gracias por tu interes. La guia que acabas de descargar te ayudará a mejorar tu nivel. Es posible que nos contactemos contigo para contarte más acerca de AUGUST ENGLISH.
						AUGUST ENGLISH
						Aprender inglés es uno de los primeros pasos para reinventarte personal y profesionalmente. 
							Deseamos ayudarte a renacer en tu vida, ofreciéndote clases accesibles y flexibles que puedan 
							lanzarte a tu nuevo futuro.

						NUESTRA HISTORIA

						August English se enorgullece de ser uno de los institutos más dinámicos de Chile, especializado 
							en la educación de adultos profesionales. Ofrecemos clases de inglés conversacional, incluso para 
							la preparación de exámenes, entrevistas y una gran variedad de cursos diseñados para industrias 
							específicas.';
							
//not($ma);

if(!$mail->send()) {
   echo 'bad';
   exit;
}

?>
