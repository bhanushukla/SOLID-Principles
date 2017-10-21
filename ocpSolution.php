<?php

/**
 *
 */
interface LoginInterface
{
	public function authenticateUser($user);
}

class NormalLogin implements LoginInterface {
	public function authenticateUser($user)
	{
		// authetication logic  for mornal user
	}
}

class ThirdPartyLogin implements LoginInterface {
	public function authenticateUser($user)
	{
		// authentication logic for third party user
	}
}
// similar classes can be created further for any other type of login

class LoginModule {

	// depending on the type of user instance, appropriate method will get called
	public function login($user)
	{
		$user->authenticateUser($user);
	}
}

 ?>	
