<?php

echo solution([-3,1,2,-2,5,6,1,2,3,1,2,3,-100]);
function solution($A){
	/*
	 * Solution 1: 100%
	 */
	$last=count($A)-1;
	$arr=array();
	sort($A);
	//We're actually interested in only 6 numbers -> the first 3 and the last 3
	if(count($A)>6){
		$arr[0]=$A[0];
		$arr[1]=$A[1];
		$arr[2]=$A[2];
		$arr[3]=$A[$last-2];
		$arr[4]=$A[$last-1];
		$arr[5]=$A[$last];
	}
	else {
		$arr = $A;
	}
	$maxVal=$arr[0]*$arr[1]*$arr[2];
	for($i=0; $i<count($arr)-2;$i++){
		for($j=$i+1;$j<count($arr)-1;$j++){
			for($k=$i+2; $k<count($arr); $k++){
				if($arr[$i]*$arr[$j]*$arr[$k]>$maxVal){
					$maxVal=$arr[$i]*$arr[$j]*$arr[$k];
				}
			}
		}
	}
	return $maxVal;
}