<?php 


class MealModel{

	public function create ($name, $description, $photo, $qteInstock, $buyPrice, $salePrice)
	{
		$sql = 'INSERT INTO Meal 
			(
				Name,
				Description,
				Photo,
				QuantityInStock,
				BuyPrice,
				SalePrice
			) VALUES (?, ?, ?, ?, ?, ?)';

		$database = new Database();
		$database->executeSql($sql, 
		[
			$name,
			$description,
			$photo,
			$qteInstock,
			$buyPrice,
			$salePrice
		]);
	}


	public function listAll()
	{
		$database = new Database();

		$sql = 'SELECT * FROM Meal';
		$id = array();
		
		return $database->query($sql,$id);
	}


	public function listOne($mealId)
	{
		$database = new Database();

		$sql = 'SELECT 
			Name,
			Description,
			Photo,
			QuantityInStock,
			BuyPrice,
			SalePrice
			FROM Meal WHERE Id = ?';

		return $database->queryOne($sql, [$mealId]);
	}

	public function update($Id,$newName,$newDesc,$newPhoto,$newQte,$newBuy,$newSale)
	{
		/*
			!! Update $table set '' = ? where '' = ?
		*/
		$sql = 'UPDATE meal SET
			Name = ?,
			Description = ?,
			Photo = ?,
			QuantityInStock = ?,
			BuyPrice = ?,
			SalePrice = ? WHERE Id = ?';
		$database = new Database();
		return $database->executeSql($sql,
		[
			$newName,
			$newDesc,
			$newPhoto,
			$newQte,
			$newBuy,
			$newSale,
			$Id
		]);
	} 

	// DELETE FROM $table WHERE Condition

	public function delete($Id)
	{
		$database = new Database();

		$sql = 'DELETE FROM Meal WHERE Id = ?';

		return $database->queryOne($sql,[$Id]);
	}

	

	public function getmealcommand($idmeal,$iduser){

		$database = new Database();

		$sql = 'SELECT * from orders, meal where meal.Id = orders.id_meal and orders.id_user = 1';

		return $database->queryOne($sql,([$idmeal,$iduser]));	
	}
}