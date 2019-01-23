<?php 
class ConsultController {

	public function httpGetMethod(Http $http, array $queryFields)
	{
		$id = $_GET['id'];
		$mealModel = new MealModel();
		$meal = $mealModel->listOne($id);

		return 
		[
			'meal' => $meal,
		];
	}
}
