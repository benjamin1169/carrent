<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT']."/carrent-master/controllers/payment_controller.php");

$email=$_POST['email'];
$amount= $_POST['amount'];

$ref = $_POST['ref'];

$response= $_POST['res'];

//generates the invoice id
$invoice= mt_rand();

if ($response == "success"){
  
  }

 
else{

}

$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' =>  $amount
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: pk_test_9f2642ec7c0f929d61adf598f8ca802cc79d8914",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088 
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
?>
