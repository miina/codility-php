<?php
echo solution(0, 0, 11);

function solution($A, $B, $K){
	$divInts = (int)($B/$K)-(int)(($A-1)/$K);
	if($A===0) $divInts++;
	return $divInts;
}