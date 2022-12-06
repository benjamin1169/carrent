<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/service_controller.php');


if(isset($_GET['searchbutton']))
{
    // retrieve the name, description and quantity from the form submission
    $search = $_GET['searchfield'];

    // $result = search_product_controller();
    $result = search_service_controller($search);

    if($result)
    {

        header("Location: ../view/service_search.php?search=$search");
    }
}

    
?>