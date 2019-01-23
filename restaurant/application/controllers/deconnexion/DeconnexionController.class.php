<?php 

class DeconnexionController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
		$session = new UserSession();
		$session->destroy();

		$http->redirectTo('/connexion');
	}

	public function httpPostMethod(Http $http, array $formFields)
	{

	}
}