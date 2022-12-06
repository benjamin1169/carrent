<?php
session_start();
include_once('../controllers/service_controller.php');


// check if theres a POST variable with the name 'addButton'
if (isset($_POST['addButton'])) {
    // retrieve the name, description and quantity from the form submission
    $categoryname = $_POST['service_cat'];
    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];
    $service_desc = $_POST['service_desc'];
    // $img = $_FILES['file'];
    $service_keywords = $_POST['service_keywords'];

    echo $categoryname . '<br>';
    echo $service_name . '<br>';
    echo $service_price . '<br>';
    echo $service_desc . '<br>';
    echo $service_keywords . '<br>';



    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];

    // echo $filename . '<br>';
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $FileType = $_FILES['file']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    // selecting the type of file
    $permit = array('jpg', 'jpeg', 'png', 'pdf');

    // checking the type of file
    if (in_array($fileActualExt, $permit)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../images_fd/' . $fileNameNew;
                // echo $fileDestination;
                $move = move_uploaded_file($fileTmpName, $fileDestination);
                if ($move) {
                    $result = add_service_controller($categoryname, $service_name, $service_price, $service_desc, $fileDestination, $service_keywords);

                    if ($result) {
                        header("Location: ../admin/admin-one/dist/index.php");
                        // echo "It works";
                    } else {
                        header("Location: ../admin/admin-one/dist/index.php");

                        // echo "It didn't work";
                    }
                }
            } else {
                echo "The file is large";
            }
        } else {
            echo "An error occurred while uploading your file";
        }
    } else {
        echo "Unfortunately you cannot upload this kind of file";
    }
}




if (isset($_POST['EditButton'])) {

    // if(isset($_GET["service_id"]))

    $id = $_POST["service_id"];
    $categoryname = $_POST['service_cat'];
    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];
    $service_desc = $_POST['service_desc'];
    $service_keywords = $_POST['service_keywords'];

    // echo $id . '<br>';
    // echo $categoryname . '<br>';
    // echo $service_name . '<br>';
    // echo $service_price . '<br>';
    // echo $service_desc . '<br>';
    // echo $service_keywords . '<br>';
    // exit();

    $results = update_service_controller($id, $categoryname, $service_name, $service_price, $service_desc, $service_keywords);
    // var_dump($results);
    if ($results) {
        header("Location: ../");
    } else {
        header("Location: ../");
    }
}



// check if button is clicked
if (isset($_GET["delete_id"])) {
    // grab form data
    $service_id = $_GET["delete_id"];

    echo $service_id;

    $result = deleteservice($service_id);
    //echo $result;

    if ($result) {
        // header("location: ../admin/service_display.php");
        echo "deleted";
    } else {
        echo "Unable to Delete";
    }
}
