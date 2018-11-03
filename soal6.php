<?php

echo "SELECT products.`id`, products.`name`, product_categories.`name` FROM products, product_categories WHERE products.`category_id` = `product_categories`.`id`";



?>