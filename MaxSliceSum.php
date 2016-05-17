<?php
echo solution([500,-1,600]);

function solution($A){
	$maxSum=$A[0];
	$currentSlice=$A[0];
	for($i=1; $i<count($A); $i++){
		if($A[$i]<$currentSlice+$A[$i]){
			$currentSlice+=$A[$i];
		}
		else {
			$currentSlice=$A[$i];
		}
		if($maxSum<$currentSlice){
			$maxSum=$currentSlice;
		}
	}
	return $maxSum;
}
?>