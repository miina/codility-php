<?php
echo solution([1,2,3,5]);

function solution($A){
	/*
	 * Solution 1: 100%, 100%
	 */
	$array = array_unique($A);
	sort($array);
	$k=1;
	$negOnly = true;
	for($i=0; $i<count($array);$i++){
		if($array[$i]<=0) continue;
		else{
			if($negOnly){
				$negOnly=false;
			}
			if($array[$i]!=$k){
				return $k;
			}
			$k++;
		}
	}
	if($negOnly){
		return 1;
	}
	else{
		return max($array)+1;
	}
}
?>