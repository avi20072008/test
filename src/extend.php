<?php 
    /* -----------------------------------------------------------------------
        Module #    Extend Class
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module extends Rotate class and returns last
        			element from the output of Rotate class's execute method.

    	----------------------------------------------------------------------*/

	include 'Rotate.php';
	use \Sfp\Rotate as RotateA;

	class Extend extends RotateA
	{
		private $arr = [];
		private $ele;

		// constructor expects rotation count.
		public function __construct($rotCount){
			parent::__construct($rotCount);
			$this->arr = parent::execute();
		}

		// method will return last element of rotated array.
		public function extend(): string{
			return array_pop($this->arr);
		}
	}

	// Uncomment this code to test
	// $obj = new Extend(1);
	// var_dump($obj->extend());


 ?>