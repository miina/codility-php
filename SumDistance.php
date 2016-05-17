<?php
echo solution([-8,4,0,5,-3,6]);

function solution($A){

	$maxP=-100;
	$maxSum=0;

	for($i=0; $i<count($A); $i++){
		$maxP=max($maxP, $A[$i]-$i);
		if($maxSum<$maxP+$A[$i]+$i){
			$maxSum = $maxP+$A[$i]+$i;
		}
	}
	return $maxSum;
}
?>