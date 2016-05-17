<?php
var_dump(solution([4,1,2,3]));

function solution($A){
	/*
	 * Solution 1 - 100%,
	 */
	sort($A);
	for($i=0; $i<count($A); $i++){
		if($A[$i]!=$i+1){
			return false;
		}
	}
	return true;
}