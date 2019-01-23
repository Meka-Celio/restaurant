<?php 

class OrderdeleteController{

	public function httpGetMethod(Http $http, array $queryFields)
	{
		$idOrder = $_GET['Id'];
		$orderModel = new OrderModel();
		$delete = $orderModel->deleteOrder($idOrder);
	}
} 