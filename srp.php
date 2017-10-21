<?php

Class User {

	// formatting the response
	protected function formatResponse($data) {
		return [
			"name" 		=> $data->name,
			"userName"	=> $data->username,
			"rank" 		=> $data->rank,
			"score"		=> $data->score
		];
	}

	// validiation of user
	protected function validateUser($user) {
		if($user) {
			return true;
		} else {
			throw new UnknownUserException("User doesn't exist " . $e->getMessage());
		}
	}

	// querying the database
	protected function fetchUserFromDatabase($userID) {
		return DB::table('users')->findOrFail($userID);
	}
}

?>
