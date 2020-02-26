<?php
require 'config.php';
require 'header.php';




$title=$price=$description=$time=$image= "";


if(isset($_GET['id'])){
	$id = $_GET['id'];
	//USE ID TO PULL DATA FROM THE DATABASE TABLE

	$sql = "SELECT `id`, `supplier_id`, `title`, `price`, `description`, `image`, `time_posted` FROM `product` WHERE id='$id'";

	$product = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($product)) {
		$id = $row['id'];
		$title = $row['title'];
		$price = $row['price'];
		$description = $row['description'];
		$time = $row['time_posted'];
		$image = $row['image'];


	}
}






require 'product_detail_form.php';

require 'footer.php';
?>