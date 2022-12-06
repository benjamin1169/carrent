<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/carrent-master/controllers/service_controller.php');

if(isset($_POST['AddCategory'])){

    $categoryname=$_POST['categoryname'];
 
      
    $result = addcategory_ctr($categoryname);

    echo $result;
   
    if($result){ 
        header("location: ../admin/admin-one/dist/addeditcatform.php");
      
    }
    else {
        echo "insertion unsuccessful";
    }

}

if(isset($_POST['editCategory'])){

    $categoryname=$_POST['cname'];
    $id=$_POST['cid'];

    // echo $categoryname.'  ' .$id;
      
    $result = updateCategory_ctr($categoryname, $id);
   
    if($result){ 
        header("location: ../admin/admin-one/dist/addeditcatform.php");
        
    }
    else {
        echo "insertion unsuccessful";
    }

}

// check if button is clicked
if(isset($_GET["deleteCategory"])){
    // grab form data
    $category_id = $_GET["delete_id"];
   

    $result = deletecatergory_ctr($cat_id);
    //echo $result;

    if ($result) {
        // header("location: ../admin);
        echo "Deleted successfully";
    } 
    else {
        echo "Unable to Delete";
    }
}





?>

