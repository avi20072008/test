<?php
    /* ----------------------------------------------------------------------
        Module #    Helper Module
        Author #    Avinash Patil
        Date   #    9-Feb-2018
        Usage  #    This module contain common functions for the project.
    	---------------------------------------------------------------------*/

	class Helper{

		static function loadCSVFile($fname){
			$fileContent = [];
			if (($handle = fopen($fname, "r")) !== FALSE) 
			{
				$fileContent = array_map('str_getcsv', file($fname));
			    fclose($handle);
			}
			return $fileContent;
		}
	}
?>