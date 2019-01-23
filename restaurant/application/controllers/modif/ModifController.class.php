<?php  

class ModifController{


	public function httpGetMethod(Http $http, array $queryFields)
	{
		$id = $_GET['id'];
		$mealModel = new MealModel();
		$meal = $mealModel->listOne($id);

        return 
        	[ 
        	'_form' => new MealForm(),
        	'meal' => $meal
        	];
	}

	public function httpPostMethod(Http $http, array $formFields)
	{

		$id = $_GET['id'];
		$mealModel = new MealModel();
		$mealModel->update(
			$formFields['id'],
			$formFields['name'],
			$formFields['description'],
			$formFields['photo'],
			$formFields['quantityinstock'],
			$formFields['buyprice'],
			$formFields['saleprice']
		);


		$id = $_GET['id'];
		$mealModel = new MealModel();
		$meal = $mealModel->listOne($id);

        return 
        	[ 
        	'_form' => new MealForm(),
        	'meal' => $meal
        	];

	}

}