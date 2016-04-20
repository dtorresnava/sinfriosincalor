<?php

Yii::import('application.extensions.phpmailer.JPhpMailer');

class EnviarEmail{
	
	public function enviar(array $form, array $to, $subject, $message) {
		$mail = new JPhpMailer();
		
		$mail->IsSMTP();
		$mail->Host = 'localhost';
		$mail->SetFrom($form[0], $form[1]);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->AddAddress($to[0], $to[1]);
		$mail->Send();
	}
	
}