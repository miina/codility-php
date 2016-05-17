<?php
echo solution(4, [1, 2, 3, 4, 1, 1, 3]);
function solution($K, $A){ //100%
	if($K==1) return count($A);
	$ropes=0;
	$tiedLen=0;
	for($i=0; $i<count($A); $i++){
		if( $A[$i] >= $K ){//If the current rope is larger or equal than needed, forget the tied rope, just count this
			$ropes++;
			$tiedLen=0;
		}
		else if( ($tiedLen + $A[$i]) >=$K ){ //If the previously tied rope + current rope is larger than $K
			$tiedLen=0; //initialize the tied rope
			$ropes++;
		}
		else if( $tiedLen<$K && $A[$i]<$K){ //If the previous rope + the current rope both are smaller than $K
			$tiedLen += $A[$i]; //Tie these together
			if( $tiedLen >= $K ) { //If it now is larger
				$tiedLen = 0; //initializ the tied
				$ropes++; // Add a rope
			}
		}
	}
	return $ropes;
}