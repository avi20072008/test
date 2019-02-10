<?php  
    /* ------------------------------------------------------------
        Module #    EVEN Numbers
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module returns total number of Even numbers 
        			from Numbers.csv file.
    	------------------------------------------------------------*/
	
namespace Sfp;

include 'Helper.php';

class Even {
	
	private $data = [];

	public function __construct(){
		//load CSV file using helper function
		$this->data = \Helper::loadCSVFile("../assets/numbers.csv");
	}

	public function execute():int{

			$counter = 0;
			for($i=0;$i<count($this->data);$i++)
			{
				if($this->data[$i][0] % 2 == 0)
					$counter++;
			}
			return $counter;
	}
}

// Uncomment to test code.
// $obj = new Even();
// echo $obj->execute();

?>