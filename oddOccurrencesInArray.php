<?php
var_dump(solution([3, 3, 9, 9, 6]));
function solution($A){
	$count = array();
	foreach($A as $key=>$value){
		if(!isset($count[$value])){
			$count[$value]=1;
		}
		else if( $count[$value]===1 ){
			unset($count[$value]);
		}
	}
	return key($count);
	/*
	 * Solution 3 - correctness 80%, performance 20%
	$array=$A;
	$checkedArray=array();
	foreach( $array as $k=>$v ){
		if( in_array($v, $checkedArray) ){
			continue;
		}
		if(($key = array_search($v, $array )) !== false){
			unset($array[$key]);
			$checkedArray[]=$v;
		}
		if(($key = array_search($v, $array )) !== false){
			unset($array[$key]);
		}
		else {
			return $v;
		}
	}
	*/
	/*
	 * Solution 2 - 80%, 25% performance
	foreach( $array as $k=>$v ){
		$keys = array_keys( $array, $v);
		var_dump($keys);
		if(count($keys)===1){
			return $v;
		}
	}
	*/
	/*
	 * Solution 1: 80% correct, 50% performance => 66%
	 * $array=array_count_values($A);
	foreach($array as $k=>$v){
		if($v==1){
			return $k;
		}
	}*/
	
}
?>