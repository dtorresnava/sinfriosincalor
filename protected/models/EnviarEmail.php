<?php

Yii::import('application.extensions.phpmailer.JPhpMailer');

class EnviarEmail{
	
	public function enviar(array $form, array $to, $subject, $message) {
		$mail = new JPhpMailer();
		
		$mail->IsSMTP();
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		$mail->IsHTML(true);
		$mail->Username = "sinfriosincalorvlc@gmail.com";
		$mail->Password = "sinfriosincalor";
		$mail->SetFrom($form[0], $form[1]);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->AddAddress($to[0], $to[1]);
		$mail->Send();
	}
	
}