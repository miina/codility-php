<?php
echo solution(30);

function solution($N){
	//100%;
	$minPer=($N+1)*2;

	$i=2;
	while($i*$i<$N){
		if($N%$i===0){
			if($minPer>($i+$N/$i)*2){
				$minPer = ($i+$N/$i)*2;
			}
		}
		$i+=1;
	}
	if($N==$i*$i){
		if($minPer>($i+$N/$i)*2){
			$minPer = ($i+$N/$i)*2;
		}
	}
	return $minPer;
}