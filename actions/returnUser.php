 <?php 
// if(!isset($_SESSION)){
//     session_start();
// }

// require("../controllers/customer_controller.php");

// if(isset($_POST['login'])){

//     $email=$_POST['email']; 
//     $password=$_POST['password']; 

//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    
//     $result = returnCustomer_ctr($email);
//     //   var_dump($result);
//     if(!empty($result)){
//         if($result['customer_pass'] == $password){
//             $_SESSION['user_id'] = $result['customer_id'];
//             $_SESSION['user_name'] = $result['customer_name'];
//             $_SESSION['user_role'] = $result['user_role'];
//             header("location: ../index.php");
//         }else{
//             echo "User password or email incorrect.";
//         }
//     }else {
//         echo "no user found";
//     }

//     } else {
//         echo("$email is not a valid email address");
//     }


// }


// ?>
