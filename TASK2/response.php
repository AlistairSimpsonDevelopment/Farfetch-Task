<?php 

//$postdata 	= file_get_contents("php://input");
//$request 	= json_decode($postdata, true);
$productid  = $_REQUEST['ProductID'];

	$url ="https://www.farfetch.com/uk/api/ecommerce/products/";
	
	$RequestURL = $url . $productid;		 
	 
	$source = json_decode(file_get_contents($RequestURL),true);
			
	$data = $source['categories'];
 
	
	echo json_encode($data) ;
	
?>