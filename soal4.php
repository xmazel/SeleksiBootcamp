<?php

function fpb($a, $b) { 
  return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) ); 
}
function isBentrok($a, $b){
  		return ( $a / fpb($a,$b) ) * $b; 
	}


echo "Jadwal Pak Hasan akan bentrok setiap <b>" .isBentrok(4,5). "</b> hari sekali";

 ?>