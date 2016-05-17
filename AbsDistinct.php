<?php
//echo solution([-5,-3,-1,0,3,6]);
function solution($A){
	//return count(array_flip($A)); //version 1 for solving the problem: 100% 
	
	//A second version
	$vals=array();
	for($i=0; $i<count($A); $i++){
		$vals[abs($A[$i])]=1;
	}
	return count($vals);
}