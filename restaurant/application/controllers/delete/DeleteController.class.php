<?php 

class DeleteController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
		$id = $_GET['id'];
		$mealModel = new MealModel();
		$del = $mealModel->delete($id);
	}
}