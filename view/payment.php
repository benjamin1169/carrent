

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/carrent-master/controllers/customer_controller.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/carrent-master/controllers/service_controller.php');

$new = select_all_cat_controller(); 
$services = select_all_service_controller();  

session_start();
$total = $_GET['total'];
$total_a = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/search.css"> -->
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
  <link rel="stylesheet" href="../css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="../css/style.css">
    <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>      
    
</head>
<body>
    <div class="container mt-5 pt-5 text-center">
        <h1>Services</h1>
                <?php

                $new= returnCustomerid_ctr($_SESSION['user_id']);
                
            
                $serv= get_user_appointment_ctr($_SESSION['user_id']);

            

                foreach($serv as $item){
                    $serv_aa = select_one_service_controller($item['service_name']);
             
                    ?>
                    <div class= 'edit'>
                        
                        <div>
                        <img id="img1" width="50%" class="mb-3" style='border-radius: 8px' src="<?php echo( $serv_aa['service_image']); ?>">
                        </div>
                           <?php echo('Ghc'); echo($serv_aa['service_price']); 
                           $total_a= $total_a+$serv_aa['service_price'];
                           ?>
                        </div> 
						                       
                        <div><a href="singleview.php?service_id=<?php echo( $serv_aa['service_id']); ?>">View Service</a></div>
                    </div>
                   

                    <?php } ?>
                <div class="container text-center">
                    <h1 >Total price</h1>
                    <?php
                    echo("Ghc".$total_a);
                    ?>
                    <form id="paymentForm" method='post'>
                        <div class="form-group">

                            <input type="email" id="email-address" hidden required value="<?php echo $new['customer_email']?>"/>
                        </div>
                        <div class="form-group">
                            <input type="number" id="amount" hidden required value="<?php echo $total?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" id="first-name" hidden value="<?php echo $new['customer_name']?>"/>
                        </div>
                        <div class="form-group">
                            <input type="number" id="customer-Id" hidden value="<?php echo $new['customer_id']?>"/>
                        </div>
                    
                        
                            <button class="btn btn-primary" type="submit" onclick="payWithPaystack()"> Pay </button>
                    
                    </form>
                </div>
                 

    </div>

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
                    url:"../actions/payment_process.php",
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
</body>
</html>