<!DOCTYPE html>
<html>
<head>
	<title>Bilangan Prima</title>
</head>
<body>
	<table>
<?php

function bilPrima($baris, $kolom){

$jumPrima = $baris*$kolom;
    $bilAwal = 0;
    $i = 0;
    while($bilAwal < $jumPrima){
         $counter = 0; 
          for($j=1;$j<=$i;$j++){
                if($i % $j==0){ 
                      $counter++;
                }
          }
        if($counter==2){
            print $i." ";
            $bilAwal++;
        }
        if($bilAwal % $kolom == 0){
        print  "<br>";
        }   
        $i++;

    } 

}
echo bilPrima(3,7);

?>
</table>
</body>
</html>