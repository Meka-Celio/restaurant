<?php 

class ConnexionForm extends Form{

	public function build()
	{
		$this->addFormField('email');
		$this->addFormField('motdepasse');
	}	

}


