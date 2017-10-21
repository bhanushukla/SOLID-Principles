<?php
/**
 * UserRepository Interface
 */
interface UserRepository
{
	// a DOC blocker can be useful to maintain the return types
	/**
	 * @return collection
	 */
	public function getUserData();

}

class NormalUserRepository implements UserRepository {

	// returns a colelction containing user data
	public function gelsptUserData($userID)
	{
		return DB::table('users')->where('user_id', '=', $userID);
	}

}

class ThirdPartyUserRepository implements UserRepository {

	// returns an array of user data
	public function getUserData($userID)
	{
		return FileSystem::getUserInformation($userID);
	}
}


 ?>
