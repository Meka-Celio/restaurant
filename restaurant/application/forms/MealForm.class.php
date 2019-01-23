<?php 

class MealForm extends Form{

	public function build()
	{
		$this->addFormField('id');
		$this->addFormField('name');
		$this->addFormField('description');
		$this->addFormField('photo');
		$this->addFormField('quantityinstock');
		$this->addFormField('buyprice');
		$this->addFormField('saleprice');
	}
}