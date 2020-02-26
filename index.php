<?php
require "header.php";
require 'config.php';


if(isset($_GET['msg_login'])){

    echo'
    <div class="alert alert-success">
        <p>LOGGED IN SUCCESSFULLY</p>
    </div>      
';

}
?>

<div class="container">
	<div class="row">
		<!-- PULL ALL PRODUCTS DATA FROM DB -->
		<!-- LOOP THROUGGH THE DATA AND DISPLAY -->
		<? 
		$sql = "SELECT * FROM `product`";
		$product = mysqli_query($conn, $sql);
        while($row=  mysqli_fetch_assoc($product)){
            echo "<tr>";
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $time = $row['time_posted'];
                $image = $row['image'];

         require 'card.php';
		}
		?>
	
	</div>
</div>


<?
require 'footer.php'
?>





































<?php
require 'footer.php';
?>
