<?php 

class OrderlineController{

	public function httpGetMethod(Http $http, array $queryFields)
	{	
		$id = $_GET['id_user'];
		$orderlineModel = new OrderlineModel();
		$lines = $orderlineModel->showOrderlinesUser($id);
		
		return ['_form' => new OrderlineForm(),
				'lines' => $lines,
		 ];
	}

	public function httpPostMethod(Http $http, array $formFields)
	{
		$orderlineModel = new OrderlineModel();


		$orderlineModel->ajoutLine(
			$formFields['id_order'],
			$formFields['total'],
			$formFields['id_user']
		);
	}
}