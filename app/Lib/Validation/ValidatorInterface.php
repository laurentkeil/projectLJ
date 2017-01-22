<?php namespace Lib\Validation;

//interface de validation
interface ValidatorInterface {

    public function fails($id = null);
	public function errors();

}