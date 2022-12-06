

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/customer_controller.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/service_controller.php');

$data = select_all_cat_controller(); 
$services = select_all_service_controller();  

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>      
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="/css/aos.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="../css/donate.css">
<style>				
		body {
			text-align: center;
		}

        .bg-main{
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../images/donationsimage.jpg');
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
    <div>

                <?php

                $data= returnCustomerid_ctr($_SESSION['user_id']);
        
            

                // foreach($services as $item){
                //     $serv_aa = select_one_service_controller($item['service_name']);
             
                //     ?>

                   

                  <?php
                // }?>
    
               <!-- <form id="paymentForm" method='post'> -->
               <form id="msform" method="post" action="../actions/payment_process.php">
  <!-- progressbar -->
  <ul id="progressbar">

    
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">KINDLY INSERT YOUR DETAILS TO PAY</h2>
    <input type="email" name="email" placeholder="Enter your email here" id="email-address" />
    <input type="number" name="amount" placeholder="How much do you prefer to pay" id="amount"/>
    <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
    <button type="submit" class="next action-button" onclick="payWithPaystack()">Pay</button>
  </fieldset>
 
</form>

                    <!-- <div class="form-group">
                        Email<input type="email" name="email" placeholder="Type your email" id="email-address"></input></br>
                        Amount<input type="number" name="amount" placeholder="How much do you prefer to pay" id="amount"></br>
                    
                        <button type="submit" onclick="payWithPaystack()"> Pay </button>
                   
                    </form> -->
                     <!-- <script src="payment.js"></script> -->
                    <script type="text/javascript">
     
    
function payWithPaystack() {


  event.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_9f2642ec7c0f929d61adf598f8ca802cc79d8914', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1),
    currency:'GHS',
     // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
    
      if(response.status == "success"){
      
        email= document.getElementById("email-address").value;
        amount= document.getElementById("amount").value;
        
        
        


        dataString = 'email='+ email +'&amount='+amount+'&ref='+response.reference+'&res='+response.status;
        $.ajax({
            type:"POST",
            url:"../actions/donatepay_process.php",
            data: dataString,
            cache:false,
            success:function(result){
                alert(result);
            }
        })
        window.location = "payment_success.php";
      
    }else{
        window.location = "payment_failed.php";
    }
      alert(message);
    }
  });
  handler.openIframe();
}
                    </script>
                 

    </div>
</body>
</html>


<!-- multistep form -->


<script src="../js/donatepay.js"></script>