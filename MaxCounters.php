<?php
var_dump(solution(5, [3,4,4,6,1,4,4]));
function solution($N, $A){
	/*
	 * Solution 1: correctness: 100% performance: 60%
	 */
	//Initialize counters
	$counters = array();
	for($i=0;$i<$N; $i++){
		$counters[$i]=0;
	}
	$maxValue=0;
	//Loop all the array
	foreach($A as $k=>$v){
		//if A[K] = X, such that 1 ≤ X ≤ N, then operation K is increase(X),
		if($v<=$N){
			$counters[$v-1]++;
			if($maxValue<$counters[$v-1]){
				$maxValue = $counters[$v-1];
			}
		}
		//if A[K] = N + 1 then operation K is max counter.
		else if($v==$N+1){
			echo $maxValue;
			$counters = array_fill(0, $N, $maxValue);
		}
	}
	return $counters;
}
?>