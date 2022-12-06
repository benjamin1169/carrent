<?php

require_once($_SERVER['DOCUMENT_ROOT']."/controllers/customer_controller.php");

if(isset($_POST['Register'])){

    $name=$_POST['name'];
    $email=$_POST['email']; 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $contact=$_POST['contact'];
    $userRole= 2;

    //validate phone number 
    if(!preg_match('/([0-9\s\-]{10,})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/', $contact)) { 
        echo "Please enter a valid phone number.";
        exit;
    }else{ 
         $success = true; 
    } 
 
    //validate password  
    $number = preg_match('@[0-9]@', $password); 
    $uppercase = preg_match('@[A-Z]@', $password); 
    $lowercase = preg_match('@[a-z]@', $password); 
    $specialChars = preg_match('@[^\w\s]@', $password); 
     
    if(strlen($_POST['password']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) { 
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        exit;
    }else{ 
         $success = true; 
    }

    $emailcheck = returnCustomer_ctr($email);
    
    if(empty($emailcheck)){
        $result = insertCustomer_ctr($name,$email,$password,$contact,$userRole);
    }else{
      
        echo "<script type='text/javascript'>alert('Email is already associated with a user');</script>";
  
        header("location: ../view/login_form.php");
        exit;
      
    }

// $password_hashed = password_hash($password, PASSWORD_BCRYPT);


    if($result){ 
        header("location: ../view/login_form.php");
    }
    else {
        echo "insertion unsuccessful";
    }

}


?>
