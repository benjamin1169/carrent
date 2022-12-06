<?php

if(!isset($_SESSION)){
    session_start();
}

require_once($_SERVER['DOCUMENT_ROOT']."/controllers/customer_controller.php");

if(isset($_POST['login'])){
    
    $email=$_POST['email']; 
    echo "$email";

    $password=$_POST['password'];
    // Validating email

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
// decode password
;
    
    $result = returnCustomer_ctr($email);


    //check whether the email 
    $passwords = $result["customer_pass"];

    $working = password_verify($password,$result["customer_pass"]);

    //   var_dump($result);
    if($working){


        $_SESSION['user_id'] = $result["customer_id"];
        $_SESSION["user_role"] = $result["user_role"];
        $_SESSION['user_name'] = $result['customer_name'];
        

        if ($_SESSION['user_role'] == 1){
            header("Location: ../admin/admin-one/dist/index.php");
        }else{
            header("Location: ../index.php");
        }
 
    }else{
        header("Location: ../view/login_form.php");
    } 


}

}
?>
