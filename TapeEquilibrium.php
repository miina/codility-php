<?php
echo solution([3,1,2,4,3]);

function solution($A){
	$first_array=0;
	$second_array=array_sum($A);
	$minValue = PHP_INT_MAX;
	for($i=0; $i<count($A)-1; $i++){
		$first_array+=$A[$i];
		$second_array-=$A[$i];
		if( abs($first_array-$second_array) < $minValue ){
			$minValue = abs($first_array-$second_array);
		}
	}
	return $minValue;
	/* Solution 1: correctness 100%, performance 0%
	$len = count($A);
	$minVal=PHP_INT_MAX;
	for($i=1;$i<$len;$i++){
		$first_array = array_slice( $A, 0, $i);
		$second_array = array_slice( $A, $i );
		$absValue = abs(array_sum($first_array)-array_sum($second_array));
		if($minVal>$absValue){
			$minVal=$absValue;
		}
	}
	*/
	return $minVal;
}
?>