<?php

class fileNotFoundException extend Exception{
	private $timestamp;

	public function __construct($message, $code = 0){
	parent::__construct($message, $code);

	$this->timestamp = time();
	}

	public function getTimestamp(){
	return $this->$timestamp;
	}
}


?>