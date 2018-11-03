<?php
function countChar($string, $char){
	$result = substr_count($string, $char);

	return $result;
}

?>
<form action="" method="POST">
	<br>
<label>Masukkan String</label><input type="text" name="inputString"><br>
<label>Masukkan Char</label><input type="text" name="inputChar"><br>
<input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
$str = $_POST['inputString'];
$chr = $_POST['inputChar'];
$res = countChar($str,$chr) ;

echo $str." Character '<b>" .$chr. "</b>' found, used <b><i>" .$res. "</i></b> times";
}
?>

