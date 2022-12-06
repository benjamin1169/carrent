<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/carrent-master/settings/core.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/carrent-master/controllers/service_controller.php');
$data = select_all_cat_controller(); 
$services = select_all_service_controller();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
		
	<style>				
		body {
			text-align: center;
		}

        .bg-main{
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../images/bookservicebackground.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            /* filter: ; */
        }

		h2{
			color: white;
			font-size: 600%;

		}

		b{
            color: white;
			font-size: 400%;	
		}

		label{
			font-size: 300%;
			padding-top: 2em;
            color:azure;
		}

		h4{
			font-size: 300%;
		}
	</style>
</head>

<body class="bg-main">

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

                    