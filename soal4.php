<?php

function fpb($a, $b) { 
  return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) ); 
}
function isBentrok($a, $b){
  		return ( $a / fpb($a,$b) ) * $b; 
	}

?>


<form action="" method="POST">

	Masukkan jadwal di Amarta<input type="text" name="amarta"><br>
	Masukkan jadwal di Gor<input type="text" name="gor"><br>
	<input type="submit" name="submit">
</form>


<?php
if (isset($_POST['submit'])) {
	$amarta = $_POST['amarta'];
	$gor = $_POST['gor'];

	echo "Jadwal Pak Hasan akan bentrok setiap <b>" .isBentrok($amarta,$gor). "</b> hari sekali";

}




 ?>
