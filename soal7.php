<table class="table table-dark">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>CaregoryName</th>

	</tr>
<?php
$query = mysqli_query($koneksi, "SELECT products.`id`, products.`name`, product_categories.`name` as category_name FROM products, product_categories WHERE products.`category_id` = `product_categories`.`id`");
while($result = mysqli_fetch_array($query)){



?>

<tr>
	<td><?php echo $result['id']; ?></td>
	<td><?php echo $result['name']; ?></td>
	<td><?php echo $result['category_name']; ?></td>

</tr>

	
<?php } ?>

</table>