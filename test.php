<?php

class originalClass{

	private function __construct(){
		echo "parent construct";
	}

	public static function init(){
		echo "parent init";
		self::__construct();
	 }
}


class extendedClass extends originalClass{
	private $instance;

	private function __construct(){
		parent::init();
	}

	public static function init(){
		// PHP Fatal error:  Uncaught Error: Non-static method extendedClass::__construct() cannot be called statically
		// self::__construct(); // <- will fail

		// PHP Fatal error:  Uncaught Error: Class name must be a valid object or a string
		// PHP Fatal error:  Uncaught Error: Non-static method originalClass::__construct() cannot be called statically 
		self::$instance = new extendedClass();
	}
}

$testmodel = extendedClass::init();

?>
