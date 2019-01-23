<?php  

class OrderController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
		$id = $_GET['idUser'];
		$mealModel = new MealModel();
        $meals = $mealModel->listAll();
        $orderModel = new OrderModel();
        $montantTotal = $orderModel->showTotalOrders($id);
        // foreach($meals as $meal){
        	$mealcommand = $orderModel->getUserOrders($id);  
        	/*
        		* Valeurs retournées :
        			Id, id_user, orders.id_meal, Qte;
        			name,description,photo, buyprice, 
        	*/
        //}

        return 
        [
        	'mealcommand' => $mealcommand,
            'meals' 	=> $meals,
            'montantTotal' 	=> $montantTotal,
        ];
	}

	public function httpPostMethod(Http $http, array $formFields)
	{
			$orderModel = new OrderModel();
			$orderModel->ajoutCommande(
				$formFields['id_user'],
				$formFields['meal_id'],
				$formFields['qte']
			);
			$http->redirectTo('/order?validate=ok&idUser=$_POST["id_user"]');	
	}
}