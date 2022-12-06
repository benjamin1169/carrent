<?php
//connect to database class
// $path_classes_payment1 = $_SERVER['DOCUMENT_ROOT'];
// $path_classes_payment1 .= "/carrent-master/settings/db_class.php";
// require_once($path_classes_payment1);
require_once($_SERVER['DOCUMENT_ROOT'].'/carrent-master/settings/db_class.php');


class CustomerClass extends db_connection{

    function insertCustomer_cls($name,$email,$password,$contact,$userRole){
       
        $sqltwo= "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `user_role`) 
        VALUES ('$name','$email','$password','$contact','$userRole')";
        return $this->query($sqltwo);

    }

    function returnCustomer_cls($email){
            $sqltwo= "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
            return $this->fetchOne($sqltwo);
    
        }
        function returnCustomerid_cls($id){
            $sqltwo= "SELECT * FROM `customer` WHERE `customer_id` = '$id'";
            return $this->fetchOne($sqltwo);
    
        }

        function returnallCustomers_cls(){
            $sqltwo= "SELECT * FROM `customer`" ;
            return $this->fetch($sqltwo);
    
        }
 
        function get_user_appointment_cls($app_id){
    
            $sql = "SELECT * FROM `appointment` WHERE `customer_id`='$app_id'";
            return $this->fetch($sql);
        }
    
}


?>