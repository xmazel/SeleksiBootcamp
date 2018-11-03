<?php



function countChar($string, $char){
	$result = substr_count($string, $char);

	return $result;
}
$res = countChar("Bootcamp","o") ;
echo $string."Character " .$char. " found, used <b><i>" .$res. "</i></b> times";
?>