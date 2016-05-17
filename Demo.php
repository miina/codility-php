<?php
echo solution([-1, -1, 1]);
function solution($A){
	if( count($A) === 1){
		return 0;
	}
	$sum = floatval(array_sum($A));
	$current_sum=floatval(0);
	for( $i=0; $i<count($A); $i++ ){
		if( $i>0 ){
			$current_sum+=$A[$i-1];
		}
		if( $current_sum == $sum-$A[$i]-$current_sum){
			return $i;
		}
	}
	return -1;
}
?>