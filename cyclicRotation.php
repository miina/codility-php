<?php
var_dump(solution([3, 8, 9, 7, 6], 3));
function solution($A, $K){
	$timesToRotate = $K%count($A);
	$array=array();
	//$array = new SplFixedArray(count($A));
	foreach($A as $k=>$v){
		if($k+$timesToRotate<count($A)){
			$array[$k+$timesToRotate]=$v;
		}
		else {
			$array[($k+$timesToRotate)-count($A)]=$v;
		}
	}
	ksort($array);
	return $array;
}