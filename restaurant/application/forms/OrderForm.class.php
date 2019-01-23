<?php 

class OrderForm extends Form{

	public function build()
	{
		$this->addFormField('id_user');
		$this->addFormField('meal_id');
		$this->addFormField('qte');
	}
}