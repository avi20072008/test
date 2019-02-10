<?php  
    /* ------------------------------------------------------------
        Module #    Rotate Array
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module rotates array by the given rotation val.
    	------------------------------------------------------------*/

namespace Sfp;

class Rotate {
	
	private $rotCount = 0;
	private $data = [];

	function __construct($rotCount){

		$this->rotCount = $rotCount;
	}

	public function execute(){

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

$obj = new Rotate(1);
print_r($obj->execute());

?>