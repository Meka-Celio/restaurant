<?php

class AjouterController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
    	return [ '_form' => new MealForm() ];
	}	

	public function httpPostMethod(Http $http, array $formFields)
	{
		$mealModel = new MealModel();
			$mealModel->create(

				$formFields['name'],
				$formFields['description'],
				$formFields['photo'],
				$formFields['quantityinstock'],
				$formFields['buyprice'],
				$formFields['saleprice']
			);
	}
	
}
