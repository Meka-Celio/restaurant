<?php 


class UtilisateurModel{

	public function inscription($firstname, $lastname,
		$email, $motdepasse, $birthdate, $address, $city, $zipcode, $country, $phone, $creationtimestamp, $lastlogintimestamp)
	{
		$sql = 'INSERT INTO Utilisateur
			(
				FirstName,
				LastName,
				Email,
				MotdePasse,
				BirthDate,
				Address,
				City,
				ZipCode,
				Country,
				Phone,
				CreationTimestamp,
				LastLoginTimestamp
			) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

		$database = new Database();
		$database->executeSql($sql,
			[
				$firstname, 
				$lastname,
				$email, 
				$motdepasse, 
				$birthdate, 
				$address, 
				$city, 
				$zipcode, 
				$country, 
				$phone, 
				$creationtimestamp, 
				$lastlogintimestamp
			]);
	}

	public function getUser($utilisateurId)
	{
		$database = new Database();

		$sql = 'SELECT
			FirstName,
			LastName,
			Email,
			MotdePasse
			FROM Utilisateur
			WHERE Id = ?';

		return $database->queryOne($sql, [$utilisateurId]);	
	}

	// public function 

	public function getAllUsers()
	{
		$database = new Database();

		$sql = 'SELECT * FROM Utilisateur';
		$id = array();

		return $database->query($sql, $id);
	}

	public function getUsercon($mail, $password){

		$db = new Database();
		$sql = 'SELECT * FROM Utilisateur WHERE Email = ? && MotdePasse = ?';
		$result = $db->queryOne($sql, [$mail, $password]);
		return $result;

	}

	
}
