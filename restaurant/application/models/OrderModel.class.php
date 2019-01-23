<?php 

class OrderModel{

	public function ajoutCommande($Id_user,$Id_meal,$Qte)
	{
		$sql = 'INSERT INTO orders
			(
				Id_user,
				Id_meal,
				Qte
			) VALUES (?,?,?)';

		$database = new Database();
		$database->executeSql($sql,
			[
				$Id_user,
				$Id_meal,
				$Qte
			]);	
	}

	public function getAllOrders()
	{
		$database = new Database();

		$sql = 'SELECT * FROM orders';
		$id = array();
		return $database->query($sql,$id);
	}

	public function getUserOrders($id)
	{
		$database = new Database();

		$sql = 'SELECT 
			orders.Id, 
			id_user, 
			id_meal,
			Qte,
			Name,
			Description,
			Photo,
			BuyPrice from orders, meal where orders.id_meal = meal.Id and orders.id_user = ?';
		$id = [$id];
		return $database->query($sql,$id);
	}

	public function showTotalOrders($id_user)
	{
		$database = new Database();

		$sql = 'SELECT ROUND(SUM(BuyPrice * Qte),2) from orders,meal where meal.Id = id_meal GROUP BY ?';

		$id = [$id_user];
		return $database->query($sql,$id);
	}

	public function deleteOrder($id_meal)
	{
		$database = new Database();

		$sql = 'DELETE FROM orders Where Id = ?';

		return $database->queryOne($sql,[$id_meal]);
	}
}