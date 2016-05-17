<?php
echo solution(10, 100, 30);
function solution($X, $Y, $D){
	$distance=$Y-$X;
	$jumps=ceil($distance/$D);
	return $jumps;
}
?>