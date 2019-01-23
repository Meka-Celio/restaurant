<?php 

class OrderlineForm extends Form{

	public function build()
	{
		$this->addFormField('id_order');
		$this->addFormField('total');
		$this->addFormField('id_user');
	}
}