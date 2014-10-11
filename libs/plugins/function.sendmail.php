<?
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.sendmail.php
 * Type:     function
 * Name:     comprimirhtml
 * Purpose:  compress html ouput
 * -------------------------------------------------------------
 */

function smarty_function_sendmail($params) {
	include("../multiservicios/libs/PHPMailer/PHPMailerAutoload.php");

	$mail = new PHPMailer();
	$datos = json_decode($params["datos"], true);

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'multiservicios.madrid.toledo@gmail.com';                 // SMTP username
	$mail->Password = 'multiserviciosmadrid';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->From = 'multiservicios.madrid.toledo@gmail.com';
	$mail->FromName = 'Mailer';
	$mail->addAddress('multiservicios.madrid.toledo@gmail.com', 'Asistecnic Multiservicios');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('multiservicios.madrid.toledo@gmail.com', 'Servicio técnico');
	//$mail->addCC('cc@example.com');
	$mail->addBCC('chadsfather@gmail.com');

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
}
?>