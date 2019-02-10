<?php  
    /* ----------------------------------------------------------------------
        Module #    Fibonacci
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module returns 10 iterations of fibonacci series.
    	---------------------------------------------------------------------*/

namespace Sfp;

include 'Helper.php';

class Fibonacci {

	private $data = [];	// stores csv file data.
	private $fib = [];	// stores fibonacci series data.
	private $valid = true;

	public function __construct(){
		//load CSV file using helper function
		$this->data = \Helper::loadCSVFile("../assets/fibonacci.csv");
	}

	public function execute($iter): array{

		$last = 0;
		$current = 1;
		$i = 0;

		while($i < $iter)
		{
			$this->fib[] = $current;
			$current = $last + $current;
			$last = $current - $last;
			$i++;
		}

		return $this->fib;
	}

	// public function isNumberExists(){
	// 	for($j=0;$j<count($this->data);$j++)
	// 	{
	// 		if(in_array($this->data[$j][0],  $this->fib))
	// 		{
	// 			$valid = true;
	// 		}
	// 		else {
	// 			$valid = false;
	// 		}
	// 	}
	// }
}

// Uncomment to test code.
// $obj = new Fibonacci();
// print_r($obj->execute(10));

?>