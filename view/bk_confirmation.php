<?php
    session_start();
    include "../controllers/booking_controller.php";
	require "../functions/functions.php";
	$ip = getIPAddress(); 
    $apnt = display_booking($_SESSION["user_id"]);
	$total = 0;

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
	</style>
</head>

<body>

	<h2 style="color:green">TRANSFORMATION SALON</h1>
	
	<b> Thank you for choosing a time with us. 
	</b>

            <a class="signup__link" href="../view/payment.php"></a> <h3 class="headstocks">  YOUR APPOINTMENTS </h3>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Category</th> 
      <th scope="col">Service</th>
	  <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Update Appointment</th>
      <th scope="col">Cancel appointment</th>
    </tr>
  </thead>  
  <tbody>
  <?php
            foreach($apnt as $key => $value) {
                $total = $total + $value["service_price"];
                echo '
                <tr>
                <td>' .$value["category"] . '</td>
                <td>' .$value["service"] . '</td>
                <td>' .$value["service_price"] . '</td>
				<td>' .$value["app_date"] . '</td>
				<td>' .$value["app_time"] . '</td>
              <td>
                <form class="form-inline" method="POST" action="./update_app.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["user_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="app_id" value =" '.$value["app_id"].'">
                  <input type="submit" name="update_qty" value="Update Appointment">
                </form>
              </td>
              <td>
              <form class="form-inline" method="POST" action="../actions/delete_app.php">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["user_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="app_id" value =" '.$value["app_id"].'">
                  <input type="submit" name="delete" value="Cancel">
                </form>
              </td>
               <br>     
              </tr>               ' ; 

              
            }

            ?>  
  </tbody>
</table> 
<p>
  Sub total: <?php echo $total; ?>
</p>
<button type="button" onclick="window.location.href='payment.php?total=<?php echo $total?>' "class="btn btn-success">Proceed to Payment </button><br> 

</body>


</html>



	
         

	<!-- <button class="btn" type="submit" name="confirm">PROCEED TO PAYMENT</button> -->
    <!-- <button class="btn" type="submit" name="confirm">UPDATE APPOINTMENT TIME </button>
    <button class="btn" type="submit" name="confirm">VIEW MY APPOINTMENTS</button> -->
	</h4>
	</form>
	
</body>

</html>