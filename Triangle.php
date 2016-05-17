<?php
echo solution([10,50,5,1]);
function solution($A){
	/*
	 * 100%
	 */
	if(count($A)<3) return 0;
	asort($A);
	$arr=array();
	foreach($A as $k=>$v){
		$arr[]=$v;
	}
	for($i=0; $i<=count($arr)-2; $i++){
		$a=$arr[$i];
		$b=$arr[$i+1];
		$c=$arr[$i+2];
		if(($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){
			return 1;
		}
	}
	return 0;
}
?>