<?php 

//$postdata 	= file_get_contents("php://input");
//$request 	= json_decode($postdata, true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_REQUEST['ProductID']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	$productid  = $_REQUEST['ProductID'];

	$url ="https://www.farfetch.com/uk/api/ecommerce/products/";
	
	$RequestURL = $url . $productid;		 
	$data = "";
	$json = @file_get_contents($RequestURL);
	 if($json===false) {
		 
	 } else {
		$data = json_decode(file_get_contents($RequestURL),true);
	 }
			
		
	echo json_encode($data) ;
	
?>