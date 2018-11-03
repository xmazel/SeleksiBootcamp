
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
?>
<form action="" method="POST">
	<br>
Masukkan baris : <input type="text" name="baris"><br>
Masukkan kolom : <input type="text" name="kolom"><br>
<input class="btn btn-primary" type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
	$baris = $_POST['baris'];
	$kolom = $_POST['kolom'];	
	echo "Baris : ".$baris."<br>";
	echo "Kolom : ".$kolom."<br>";
	echo bilPrima($baris,$kolom);
}



?>
