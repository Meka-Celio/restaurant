<?php 

class UserSession
{
	public function __construct()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
	}

	public function create($id, $firstname, $lastname, $email)
	{
		$_SESSION['User'] =
		[
			'Id' 		=> $id,
			'FirstName' => $firstname,
			'LastName'	=> $lastname,
			'Email' 	=> $email
		];
	}


	public function destroy()
	{
		$_SESSION = array();
		session_destroy();
	}

	public function getUserName()
	{
		if($this->authentification()==false)
		{
			return null;
		}
		return $_SESSION['User']['FirstName'].' '.$_SESSION['User']['LastName'];
	}

	public function getUserId()
	{
		if($this->authentification()==false)
		{
			return null;
		}
		return $_SESSION['User']['Id'];
	}

	public function authentification()
	{
		if(array_key_exists('User', $_SESSION) == true)
		{
			if(empty($_SESSION['User']) == false)
			{
				return true;
			}
		}

		return false;
	}
}