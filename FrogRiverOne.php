<?php
echo solution(5, [1,3,1,4,2,3,4]);
function solution($X, $A){
	
	/*
	 * Solution 2: 100%
	 */
	$existingLeaves = array();
	
	for($i=0;$i<count($A); $i++){
		
		if(!isset($existingLeaves[$A[$i]]) && $A[$i]<=$X){
			$existingLeaves[$A[$i]] = $A[$i];
			
			if(count($existingLeaves)==$X){
				return $i;
			}
		}
	}
	return -1;
	
	/*
	 * Solution 1: correctness: 100%; performance: 80%;
	 */
	/*
	$array = $array2 = array_unique($A);
	sort($array2);
	for($i=0; $i<$X; $i++){
		if($array2[$i]!=$i+1){
			return -1;
		}
	}
	end($array);
	return key($array);
	*/
}