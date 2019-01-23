<?php


class InscriptionForm extends Form{
	
	public function build()
	{
		$this->addFormField('firstname');
		$this->addFormField('lastname');
		$this->addFormField('email');
		$this->addFormField('motdepasse');
		$this->addFormField('birthdate');
		$this->addFormField('address');
		$this->addFormField('city');
		$this->addFormField('zipcode');
		$this->addFormField('country');
		$this->addFormField('phone');
		$this->addFormField('creationtimestamp');
		$this->addFormField('lastlogintimestamp');
	}
}