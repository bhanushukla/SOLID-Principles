<?php

interface ConnectionInterface
{
	public function connect();
}

class DBConnection implements ConnectionInterface {

	public function connect()
	{
		// connection logic
	}
}

class PasswordReminder {

	private $dbConnection;

	// using ConnectionInterface this way is called Dependency Injection
	// which is different from Dependency Inversion
	function __construct(ConnectionInterface $dbConnection) {
		$this->dbConnection = $dbConnection;
	}

}

 ?>
