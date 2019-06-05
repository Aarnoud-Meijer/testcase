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

	private function __construct(){
		parent::init();
	}

	public static function init(){
		// 
		self::__construct(); // <- will fail
	}
}

$testmodel = extendedClass::init();

?>
