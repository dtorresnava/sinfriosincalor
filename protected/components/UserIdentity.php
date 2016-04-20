<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
	public $datos;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * 
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$user = Usuarios::model ()->find ( 'usuario=?', array (
				$this->username 
		) );
		if ($user === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if (md5 ( $this->password ) !== $user->password)
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->datos = $user;
			$this->errorCode = self::ERROR_NONE;
		}
		return ! $this->errorCode;
	}
}