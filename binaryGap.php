<?php
echo solution(1041);
function solution($n){
	//Get the binary nof the number
	$bnry = decbin($n);
	$bnry=trim($bnry, "0");
	//Explode string by 1-s
	//Compare the length of each
	$zeroes = explode('1', $bnry);
	$longest=0;
	foreach($zeroes as $k=>$v){
		if(strlen($v)>$longest)
			$longest=strlen($v);
	}
	//var_dump($zeroes);
	
	return $longest;
}
