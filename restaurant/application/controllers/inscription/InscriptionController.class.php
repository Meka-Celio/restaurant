<?php 

class InscriptionController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
    return [ '_form' => new InscriptionForm() ];
	}

	public function httpPostMethod(Http $http, array $formFields)
	{
		$utilisateurModel = new UtilisateurModel();
        $utilisateurModel->inscription(

               $formFields['firstname'],
               $formFields['lastname'],
               $formFields['email'],
               $formFields['motdepasse'],
               $formFields['birthdate'],
               $formFields['address'],
               $formFields['city'],
               $formFields['zipcode'],
               $formFields['country'],
               $formFields['phone'],
               $formFields['creationtimestamp'],
               $formFields['lastlogintimestamp']
        );
	}

}