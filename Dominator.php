<?php
echo solution([]);

function solution($A){
	$halfLen=floor((int)count($A)/2);
	
	$occs = array();
	$index = 0;
	for($i=0;$i<count($A);$i++){
		if(isset($occs[$A[$i]])){
			$occs[$A[$i]]++;
		}
		else {
			$occs[$A[$i]]=1;
		}
		if($occs[$A[$i]]>$halfLen){
			return $i;
		}
	}
	return -1;
}
?>