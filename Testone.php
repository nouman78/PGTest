<?php
$arr = array(1, 2, 3, 4,5,6,7,8,9,10,11,12,13,14,15);

function checkMultiplesA($input) 
{
  
	$FIZZ[] = array();
	$BUZZ[] = array();
	$FIZZBUZZ[] = array();
	foreach ($input as $value) 
	{
		
		if($value%3 == 0 and $value%5 != 0)
		{
			array_push($FIZZ, $value);
		}
		elseif($value%5 == 0 and $value%3 != 0)
		{	
			array_push($BUZZ, $value);
		}
		elseif($value%5 == 0 and $value%3 == 0)
		{	
			array_push($FIZZBUZZ, $value);
		}
	}
		print "FIZZ ";
	for ($i = 1; $i < count($FIZZ); $i++) {
		print $FIZZ[$i]." ";
	}
		print "BUZZ ";
	for ($i = 1; $i < count($BUZZ); $i++) {
		print $BUZZ[$i]." ";
	}
		print "FIZZBUZZ ";
	for ($i = 1; $i < count($FIZZBUZZ); $i++) {
		print $FIZZBUZZ[$i]." ";
	}

}

checkMultiplesA($arr);

?>
