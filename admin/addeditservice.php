<?php

require('../controllers/service_controller.php');
// return array of all rows, or false (if it failed)
$service= select_all_service_controller();

$category = select_all_cat_controller();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../CSS/responsive.css">

</head>
<body>
    <!-- <header style="display: flex; margin-top: 20px; " >
       
        <a href="../admin/brand.php"><h4 style="color:black; margin-left: 900px;">Brand</h4></a>
        <a href="../admin/category.php"><h4 style="color:black; margin-left: 40px;">Category</h4></a>
        <a href="../admin/productaddandedit.php"><h4 style="color:black; margin-left: 40px;">Product</h4></a>
        <a href="../view/cart.php"><h4 style="color: black; margin-left:40px;">Cart</h4></a>

    </header> -->


	<table class="table">
		
		<div class="miniT" style="margin-top: 140px; margin-left: 140px; color: #808000; ">
			<h1 style="font-size: 60px; margin-left: 400px;">Services List</h1>
			<thead >
				<tr>
					<th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
			
                    <th>Keyword</th>
                    <!-- <th>Image</th> -->
                    <th>Update</th>

					<th></th>
				</tr>
			</thead>
		</div>
        

        <tbody>
			<?php
			foreach($service as $x){
				echo 
				"
				<tr>
                    
                    <td>{$x['service_name']}</td>
                    <td>{$x['service_price']}</td>
                    <td>{$x['service_desc']}</td>
                    
                    <td>{$x['service_keywords']}</td>

					
					<td><a href='../view/updateproduct.php?id={$x['service_id']}'>Update</a></td>
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
    
    <!-- <option value={$brand['brand_id']}>{$brand['brand_name']}</option>
                    <option value={$category['cat_id']}>{$category['cat_name']}</option> -->
                    <!-- <td>{$x['product_image']}</td> -->
</body>
</html>