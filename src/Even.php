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
	
	function __construct(){

		if (($handle = fopen("../assets/numbers.csv", "r")) !== FALSE) 
		{
			$data = array_map('str_getcsv', file('../assets/numbers.csv'));
			self::execute($data);
		    fclose($handle);
		}

	}

	public function execute($data):int{

			$counter = 0;
			for($i=0;$i<count($data);$i++)
			{
				if($data[$i][0] % 2 == 0)
					$counter++;
			}
			echo " There are {$counter} Even numbers in the list";

	}
}

$obj = new Even();
$obj->execute();

?>