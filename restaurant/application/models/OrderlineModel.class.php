<?php  

class OrderlineModel{

	public function ajoutLine($Id_order,$Total,$Id_user )
	{
		$sql = 'INSERT INTO orderlines
			(
				Id_order,
				Total,
				$Id_user
			) VALUES (?,?,?)';

		$database = new Database();
		$database->executeSql($sql,
			[
				$Id_order,
				$Total,
				$Id_user
			]);	
	}

	public function showOrderlinesUser($id_user)
	{
		$database = new Database();

		$sql = 'SELECT * FROM orderlines WHERE Id_user = ?';

		return $database->queryOne($sql,[$id_user]);
	}


}