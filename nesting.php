<?php
echo solution("(()(())())");
function solution($S){
	if(strlen($S)===0) return 1;
	$expected=array();
	$expIndex = 0;
	
	$chars = str_split($S);
	for($i=0; $i<count($chars); $i++){
		if( $chars[$i] == "("){
			$expected[$expIndex]=")";
			$expIndex++;
		}
		else {
			if($expected[$expIndex-1]==")"){
				unset($expected[$expIndex-1]);
				$expIndex--;
			}
			else {
				return 0;
			}
		}
	}
	if(empty($expected)){
		return 1;
	}
	return 0;
}