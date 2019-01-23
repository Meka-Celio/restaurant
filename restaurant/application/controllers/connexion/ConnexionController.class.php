<?php 

class ConnexionController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
		$session = new UserSession();
		$result = $session->authentification();
		// var_dump($result);
		if($result == true){
			$http->redirectTo('/');
		}
		return [ '_form' => new ConnexionForm() ];
	}

	public function httpPostMethod(Http $http, array $formFields)
	{

		$utilisateur = new UtilisateurModel();

		$result = $utilisateur->getUsercon(
			$formFields['email'],
			$formFields['motdepasse']
		);

		
		if($result != false){
			$session = new UserSession();
			$session->create(
				$result['Id'],
				$result['FirstName'],
				$result['LastName'],
				$result['Email']
			);
			// var_dump($result);
			if ($result['Email'] === "yacelio@yahoo.com") {
				$http->redirectTo('/admin');
			}
			else{
				$http->redirectTo('/');
			}
		}else{
			echo 'votre Mot e Passe incorect';
		}
	}
}