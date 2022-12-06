<?php
session_start();
include dirname(__FILE__).'/../controllers/service_controller.php';
$new = select_all_cat_controller(); 
$services = select_all_service_controller();  

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
		
	<!-- <style>				
		body {
			text-align: center;
		}


        .bg-main{
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../images/managebooking.jpg');
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
</head> -->

<body>

	<h2 style="color:white">CAR RENT</h1>
	
	<b> MANAGE YOUR BOOKING 
	</b>
	
	<br>
	<body class="container">
	<form action="../actions/book.php" method="POST">
                <label for="CATEGORIES">Choose a category:</label>
            <select name="service_cat" id="cat_name">
            <option value="<?php if(isset($_GET['category'])){echo $_GET['cat_name'];} ?>"><?php if(isset($_GET['category'])){echo $_GET['category'];} ?> </option>
            <?php
            foreach($new as $key => $value) {
                echo '<option value="' .$value["cat_id"] . '">'. $value["cat_name"] .'</option>'; 
            }
?>

</select>
            <br><br>
            <label for="SERVICE">Choose a Service:</label>
            <select name="service_name" id="services">
            <option value="<?php if(isset($_GET['service'])){echo $_GET['service_name'];} ?>"> <?php if(isset($_GET['service'])){echo $_GET['service'];} ?></option>
        
            <?php
            foreach($services as $key => $value) {
                echo '<option value="' .$value["service_id"] . '">'. $value["service_name"] .'</option>'; 
            }

            ?>  
			</select>
	
	<h4>TIME:
	<input type="hidden" value="<?php echo $_SESSION["user_id"]?>" name="customer_id">
	<input type="datetime-local" name="app_date" id="Test_DatetimeLocal" value="<?php if(isset($_GET['date']) && isset($_GET['time'])){echo $_GET['date'].$_GET['time'];} ?>">
    <input class="form-control mr-sm-2" type="hidden" value="<?php echo $_GET["ip"]?>" name="ip">
    <input class="form-control mr-sm-2" type="hidden" value="<?php echo $_GET["customer_id"]?>" name="customer_id">
    <input class="form-control mr-sm-2" type="hidden" name="app_id" value ="<?php echo $_GET["app_id"]?>">
	<button class="btn" type="submit" name="update_book">UPDATE APPOINTMENT</button>
	</h4>
	</form>
	
</body>

</html>