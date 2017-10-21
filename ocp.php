<?php
class LoginModule {

	public function login($user)
	{
		// checking instance type is a simple alert that we violated open-close principle
		if($user instanceof NormalUser) {

			$this->authenticateNormalUser($user);

		} else if ($user isntanceof ThirdPartyUser) {

			$this->authenticateThirdPartyUser($user);

		}
	}
}op
?>
