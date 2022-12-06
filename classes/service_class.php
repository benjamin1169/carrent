<?php


//connect to database class

include_once (dirname(__FILE__)).'/../settings/db_class.php';

class Service extends db_connection{

    //ADD AND UPDATE CATEGORY 
    function addcategory_cls($categoryname){
        $sqltwo= "INSERT INTO categories (cat_name) VALUES ('$categoryname')";
        return $this->query($sqltwo);
    }
    function returnCategory_cls(){
        $sqltwo= "SELECT * FROM `categories`";
        return $this->fetch($sqltwo);
    }

    function select_one_category($id){
        $sqltwo= "SELECT * FROM `categories` WHERE cat_id ='$id'";
		return $this->fetchOne($sqltwo);
	}

	function select_one_cat_service($categoryid){
		return $this->fetchOne("SELECT * FROM `categories` WHERE `cat_id`='$categoryid'");
	}

    function select_all_category(){
		return $this->fetch("SELECT * FROM `categories`");
	}
    function updatecategory_cls($categoryname, $id){
        $sqltwo= "UPDATE `categories` set `cat_name`='$categoryname' WHERE `cat_id`='$id'";
        return $this->query($sqltwo);
    }
    
    function deletecategory($id){
        $sqltwo="DELETE FROM `categories` WHERE `cat_id` = '$id' ";
        return $this->query($sqltwo);
     }

    

    
    //ADD, EDIT AND DELETE SERVICES

    function add_service($categoryname, $service_name, $service_price, $service_desc, $fileDestination, $service_keywords){
		// return true or false
        $sqltwo= "INSERT INTO services (`service_cat`, `service_name`, `service_price`, `service_desc`, `service_image`, `service_keywords` ) VALUES ('$categoryname', '$service_name', '$service_price', '$service_desc','$fileDestination', '$service_keywords')";
		return $this->query($sqltwo); 
    }

	function select_all_service(){
		// return array or false
		return $this->fetch("SELECT * FROM services");
	}

	function select_one_service($id){
		// return associative array or false
		return $this->fetchOne("SELECT services.service_id, services.service_name, services.service_cat, services.service_price, services.service_image, services.service_desc, services.service_keywords, categories.cat_id, categories.cat_name FROM services left join categories on services.service_cat=categories.cat_id WHERE service_id='$id'");
	}

	function update_one_service($id, $categoryname, $service_name, $service_price, $service_desc, $service_keywords){
		return $this->query("UPDATE services SET `service_cat`='$categoryname',`service_name`='$service_name', `service_price`='$service_price', `service_desc` = '$service_desc', `service_keywords` = '$service_keywords'  WHERE `service_id` = '$id'");
	}

    function deleteservice($service_id){
        $sqltwo="DELETE FROM `services` WHERE `service_id` = '$service_id' ";
        return $this->query($sqltwo);
     }
    //delete service
//  function deleteservice($service_id){
//     $sql="DELETE FROM `services` WHERE `service_id` = '$service_id' ";
//     return $this->query($sql);
//  }

    //SEARCH PRODUCT 
	 function search_select_service($query){
	 	return $this->fetch("SELECT * FROM services WHERE (`service_keywords` like '".$query."%') ");
	 }
}


?>











<?php

// require '../settings/db_class.php';

// class AddCAT extends db_connection{
//     //CATEGORIES METHODS
//     //add, edit, delete category
//     //add category
//     function addcat($cat){
//        // take a query
//        $catquery= "INSERT INTO `categories`(`cat_name`) VALUES ('$cat')";
//        // execute query
//        return $this->query($catquery);
//     }

// //display category
//     function selectcat(){
// 		$sql="SELECT * FROM `categories` ";
//         return $this->fetch($sql);
        
// 	}
// //select one category service 
//     function selec_one_cat($id){
// 		$sql="SELECT * FROM `categories` WHERE `cat_id`='$id'";
//         return $this->fetchOne($sql);
        
// 	}
// //update category
//     //--UPDATE--//
// 	function updatecat($id, $cat){
//         $sql = "UPDATE `categories` SET `cat_name`='$cat' WHERE `cat_id`='$id'";
// 		//exceute sql
// 		return $this->query($sql);

// 	}

  
// //SERVICE METHODS
// function addservice($service_cat,$service_name,$service_price,$service_desc,$service_image,$service_keywords){
//     // take a query
//     $servicequery= "INSERT INTO `services`(`service_cat`, 
//     `service_name`, `service_price`, `service_desc`, `service_image`, `service_keywords`) 
//     VALUES ('$service_cat','$service_name','$service_price','$service_desc','$service_image','$service_keywords')";
//     // execute query
//     return $this->query($servicequery);
//  }


//  function selectservices(){
//      $sql=" SELECT * FROM `services` ";
//     return $this->fetch($sql);
  
//  }

//  function selectservice($id){
//     $sql=" SELECT * FROM `services` WHERE `service_id`='$id'";
//    return $this->fetchOne($sql);

// }

//  //--UPDATE--//
//  function updateservice($service_id, $service_cat,$service_name,$service_price,$service_desc,$service_image,$service_keywords){
//      $sql = "UPDATE `services` SET `service_cat`='$service_cat',`service_name`='$service_name',`service_price`='$service_price',
//      `service_desc`='$service_desc',`service_image`='$service_image',`service_keywords`='$service_keywords' WHERE `service_id`= '$service_id'";
//      //exceute sql
//      return $this->query($sql);

//  }
//  //service SEARCH
//  function searchservice($searchdata){
//  $sql = "SELECT * FROM `services` WHERE `service_name` LIKE '%$searchdata%' ";
//  return $this->fetch($sql);

//  }

//  //delete service
//  function deleteservice($service_id){
//     $sql="DELETE FROM `services` WHERE `service_id` = '$service_id' ";
//     return $this->query($sql);
//  }
// // APPOINTMENT
// //add,edit,delete
// //add appointment
// function addbooking($customer_id,$service_id,$app_date){
//     $sql="INSERT INTO `appointment`( `customer_id`, `service_id`, `app_date`) VALUES ('$customer_id','$service_id','$app_date'";
//     return $this->query($sql);
// }

// //display
// function selectbooking(){
//     $sql ="SELECT * FROM `appointment`";
//     return $this->fetch($sql);

// }

// //edit appointment
// function updatebooking($app_id,$customer_id,$service_id,$app_date){
//     $sql = "UPDATE `appointment` SET `customer_id`='$customer_id',`service_id`='$service_id',`app_date`='$app_date'; 
//     WHERE `app_id`='$app_id'";
//     return $this->query($sql);
// }

// //delete appointment
// function cancelbooking($app_id,$customer_id,$service_id,$app_date){
//     $sql ="DELETE FROM `appointment` WHERE `app_id` ='$app_id'";
//      return $this->query($sql);
// }


// }
?>

