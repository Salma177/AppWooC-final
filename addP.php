
<?php include 'commerce.php'; 

	$name    =  $_GET['productName'];
	$r_price =  $_GET['productPrice'];
	$desc    =  $_GET['productDesc'];
	$img =  $_GET['file'];


	if ($name == null or $r_price == null) {
		echo 'error';
		exit();
	}

	$data = [
    'name' => $name,
	'regular_price' => $r_price,
	'description' => $desc,
	
	];

	// var_dump($data);

$woocommerce->post('products', $data);

header('Location: http://localhost:8080/AppWooC-final/listProducts.php');


?>