<?php include 'config/koneksi.php'; ?>
<?php include 'layout/head.php'; ?>
<?php include 'layout/navbar.php'; ?>
<div class="row">
<div class="col-md-9 mx-auto">
<?php
switch ($_GET['soal']) {
	case '1':
		include 'soal1.php';
		break;
		case '2':
		include 'soal2.php';
		break;
		case '3':
		include 'soal3.php';
		break;
		case '4':
		include 'soal4.php';
		break;
		case '5':
		include 'soal5.php';
		break;
		case '6':
		include 'soal6.php';
		break;
		case '7':
		include 'soal7.php';
		break;
	
}

?>
</div>
</div>
<?php include 'layout/tail.php'; ?>

