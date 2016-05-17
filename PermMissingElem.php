<?php
echo solution([2,3,4,1]);
function solution($A){
	/*
	 * Solution 2: Correctness 100%; performance 100%
	 */
	sort($A);
	for($i=0;$i<count($A); $i++){
		if($A[$i]!=$i+1){
			return $i+1;
		}
	}
	return count($A)+1;
	
	/*
	 * Solution 1: Correctness 100%; performance 20%;
	for($i=1;$i<=(count($A)+1);$i++){
		if(!in_array($i, $A)){
			return $i;
		}
	}
	*/
}
?>