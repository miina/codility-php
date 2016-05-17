<?php
echo solution(24);

function solution($N){
	//100%
	$i=0;
	$result=0;
	while($i*$i<$N){
		if($N%$i===0){
			$result+=2;
		}
		$i+=1;
	}
	if($i*$i==$N){
		$result+=1;
	}
	return $result;
}