<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/classes/service_class.php');


//CONTROLLER FOR CATEGORY 
function addcategory_ctr($categoryname){
  $add_category= new Service();
  return $add_category->addcategory_cls($categoryname);
}
  
function returnCategory_ctr(){
  $r_category= new Service();
  return $r_category->returnCategory_cls();
}
   
function select_all_cat_controller(){
  // create an instance of the Product class
  $category_allselect= new Service();
  // call the method from the class
  return $category_allselect->select_all_category();
}
  
function updateCategory_ctr($categoryname, $id){
    $update_category= new Service();
    return $update_category->updatecategory_cls($categoryname, $id);
  }

function deletecatergory_ctr($id){
    $newdata =new Service();
        return $newdata-> deletecategory($id);
    }
  


// Controller for Service
function add_service_controller($categoryname, $service_name, $service_price, $service_desc, $fileDestination, $service_keywords){
  // create an instance of the service class
  $service_install = new Service();
  // call the method from the class
  return $service_install->add_service($categoryname, $service_name, $service_price, $service_desc, $fileDestination, $service_keywords);
}


function select_all_service_controller(){
  // create an instance of the service class
  $service_install = new Service();
  // call the method from the class
  return $service_install->select_all_service();

}

function select_one_service_controller($id){
  // create an instance of the service class
  $service_install = new Service();
  // call the method from the class
  return $service_install->select_one_service($id);

}

function update_service_controller($id, $categoryname, $service_name, $service_price, $service_desc, $service_keywords){
  // create an instance of the service class
  $service_install = new Service();
  // // call the method from the class
  return $service_install->update_one_service($id, $categoryname, $service_name, $service_price, $service_desc, $service_keywords);

}

function select_one_cat($name){
  $service_install = new Service();
  // call the method from the class
  return $service_install->select_one_cat_service($name);
}

function deleteservice($service_id){
    $service_install=new Service();
    return $service_install-> deleteservice($service_id);
}
// // /*
 function search_service_controller($query){
     $service_install = new Service();
// call the method from the class
  return $service_install->search_select_service($query);
}

  

?>
