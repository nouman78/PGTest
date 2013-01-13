<?php
$arr = array(1, 2, 3, 4,5,6,7,8,9,10,11,12,13,14,15);

function checkMultiplesB($input) 
{
	
	
	$check[] = array();
	
	foreach ($input as $value) 
	{
		
		if($value%3 == 0 and $value%5 != 0)
		{
			array_push($check, $value);
			
			if (in_array($value-1, $check)) 
				print("FIZZ BAZZ ");
			else
				print($value." FIZZ ");

			
		}
		elseif($value%5 == 0 and $value%3 != 0)
		{	
			array_push($check, $value);
			
			if (in_array($value-1, $check)) 
				print("BUZZ BAZZ ");
			else
				print($value." BUZZ ");
		}
		elseif($value%5 == 0 and $value%3 == 0)
		{	
			array_push($check, $value);
			
			if (in_array($value-1, $check)) 
				print("BAZZ ");
			else
				print($value." FIZZBUZZ ");
		}
	}


}

checkMultiplesB($arr);

?>
