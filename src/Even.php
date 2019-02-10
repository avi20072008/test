<?php  
    /* ------------------------------------------------------------
        Module #    EVEN Numbers
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module returns total number of Even numbers 
        			from Numbers.csv file.
    	------------------------------------------------------------*/

namespace Sfp;

class Even {
	
	private $data = [];

	function __construct(){

		if (($handle = fopen("../assets/numbers.csv", "r")) !== FALSE) 
		{
			$this->data = array_map('str_getcsv', file('../assets/numbers.csv'));
		    fclose($handle);
		}
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
// $obj->execute();

?>