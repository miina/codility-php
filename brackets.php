<?php
echo solution("{[()()]");
function solution($S){
	/*
	 * 100%
	 */
	if(strlen($S) === 0 ) return 1;
	$expected = array();
	$expCursor = 0; //The first empty place of the expected
	$chars = str_split($S);
	$starting = array("(", "{", "[");
	$closing = array(")", "}", "]" );
	
	for($i=0; $i<count($chars); $i++){
		if( in_array($chars[$i], $starting ) ){
			$key = array_search($chars[$i], $starting);
			//If it's a starting element, add this to the expected
			$expected[$expCursor]=$closing[$key];
			$expCursor++;
		}
		else {
			//If it's an closing element, check if it matches the expected.
			if( $chars[$i] === $expected[$expCursor-1] ){
				unset($expected[$expCursor-1]);
				$expCursor--; 
			}
			else {
				return 0;
			}
		}
	}
	if(empty($expected)) return 1;
	return 0;
}