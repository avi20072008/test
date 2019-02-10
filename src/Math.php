<?php  
    /* ------------------------------------------------------------
        Module #    AVG Numbers
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module returns avg of all numbers whose 
        			accept field is true.
    	------------------------------------------------------------*/

namespace Sfp;
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include 'Helper.php';

class Math {
	
	private $data = [];

	function __construct(){
		//load CSV file using helper function
		$this->data = \Helper::loadCSVFile("../assets/tabular.csv");
	}

	public function execute():float{

			$arrValid = [];

			for($i=1;$i<count($this->data);$i++)
			{
				if(trim($this->data[$i][2]) == 'true')
					$arrValid[] = $this->data[$i][1];
			}

			if(count($arrValid))
			{
				// remove blank values if any
				$arrValid = array_filter($arrValid);
				$avg = array_sum($arrValid)/count($arrValid);

				// float has 10 decimal precision
				return number_format((float) $avg, 10, '.', '');
			}
	}
}

// Uncomment to test code.
// $obj = new Math();
// echo $obj->execute();

?>