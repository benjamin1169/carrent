<?php

require('../controllers/service_controller.php');

if(isset($_POST['searchbutton'])){
    // retrieve the name, description and quantity from the form submission
    $search = $_POST['search'];

    // $result = search_product_controller();

    header("Location: ../view/service_search.php?search=$search");

}

else{
    echo "Unable to search";
}
    
?>