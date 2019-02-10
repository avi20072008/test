<?php  
    /* ------------------------------------------------------------
        Module #    Rotate Array
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module rotates array by the given rotation val.
    	------------------------------------------------------------*/

namespace Sfp;

class Rotate {
	
	protected $rotCount = 0;
	protected $data = [];

	public function __construct($rotCount){

		$this->rotCount = $rotCount;
	}

	public function execute(): array{

		// Read JSON file
		$jsonContent = file_get_contents("../assets/rotate.json");

		// Convert JSON content to array.
		$this->data = json_decode($jsonContent);

		$arrData = $this->data;

		for($i = 0; $i < $this->rotCount; $i++){
		    //Rotate array contents
			array_push($arrData, array_shift($arrData));
		}
		return $arrData;
	}
}

// Uncomment to test code.
// $obj = new Rotate(2);
// print_r($obj->execute());

?>