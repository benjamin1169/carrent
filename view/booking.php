<?php
include('../settings/core.php');
include ('../controllers/service_controller.php');
$data = select_all_cat_controller(); 
$services = getservices();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<html>

<head>
		
	<style>				
		body {
			text-align: center;
		}

		h2{
			color: orange;
			font-size: 600%;

		}

		b{
			font-size: 400%;	
		}

		label{
			font-size: 250%;
			padding-top: 2em;
		}

		h4{
			font-size: 250%;
		}
	</style>
</head>

<body>

	<!-- <h2 style="color:orange">TRANSFORMATION SALON</h1> -->
	<h2>CAR RENT</h2>
	
	<b> BOOK AN APPOINTMENT
	</b>
	
	<br>
	<body class="container">
	<form action="../actions/book.php" method="POST">
                <label for="CATEGORIES">Choose a category:</label>
            <select name="service_cat" id="cat_name">
            <option value=""> </option>
            <?php
            foreach($data as $key => $value) {
                echo '<option value="' .$value["cat_id"] . '">'. $value["cat_name"] .'</option>'; 
            }
?>

</select>
            <br><br>
            <label for="SERVICE">Choose a Service:</label>
            <select name="service_name" id="services">
            <option value=""> </option>
        
            <?php
            foreach($services as $key => $value) {
                echo '<option value="' .$value["service_id"] . '">'. $value["service_name"] .'</option>'; 
            }

            ?>  
			</select>
	
	<h4>TIME:
	<input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="customer_id">
	<input type="datetime-local" name="app_date" id="Test_DatetimeLocal">
	<button class="btn" type="submit" name="book">BOOK NOW</button>
	</h4>
	</form>
	
</body>

</html>