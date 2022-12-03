<?php

include_once('../controllers/service_controller.php');


// check if theres a POST variable with the name 'addButton'
if(isset($_POST['addButton'])){
    // retrieve the name, description and quantity from the form submission
    $categoryname = $_POST['service_cat'];
    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];
    $service_desc= $_POST['service_desc'];
    // $img = $_FILES['file'];
    $service_keywords = $_POST['service_keywords'];


    $file= $_FILES['file'];
    $filename= $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $FileType = $_FILES['file']['type'];

    $fileExt= explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    // selecting the type of file
    $permit = array('jpg', 'jpeg', 'png', 'pdf');

    // checking the type of file
    if (in_array($fileActualExt, $permit)) {
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                $move= move_uploaded_file($fileTmpName, $fileDestination);
                
            }else{
                echo "The file is large";
            }
        }else{
            echo "An error occurred while uploading your file";
        }
    } else{
        echo "Unfortunately you cannot upload this kind of file";
    }



    $result = add_service_controller($categoryname, $service_name, $service_price, $service_desc, $fileDestination, $service_keywords);
    var_dump($result);

    // if ($result === true ){ header("Location: ../index.php");}
   
    // else{ header("Location: ../index.php");}

}




if (isset($_POST['EditButton'])) {
    
    $id = $_SESSION["service_id"];
    $categoryname = $_POST['service_cat'];
    $service_name = $_POST['service_name'];
    $service_price= $_POST['service_price'];
    $service_desc= $_POST['service_desc'];
    // $img = $_POST['file'];
    $service_keywords = $_POST['service_keywords'];

    $results= update_service_controller($id, $categoryname, $service_name, $service_price, $service_desc, $service_keywords);
    // var_dump($results);
        if ($results === true) {
      header("Location: ../");

 } else {
        header("Location: ../");
     }
    



}



session_start();
require("../controllers/service_controller.php");
// check if button is clicked
if(isset($_GET["delete_id"])){
    // grab form data
    $service_id = $_GET["delete_id"];
   

    $result = deleteservice($service_id);
    //echo $result;

    if ($result) {
        // header("location: ../admin/service_display.php");
        echo "deleted";
    } else {
        echo "Unable to Delete";
    }
}







?>
