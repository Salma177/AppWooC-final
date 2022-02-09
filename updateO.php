<?php include 'commerce.php'; 


$id      =  $_GET['id'];
$status    =  $_GET['orderStatus'];
;



if ($status == null) {
    echo 'error';
    exit();
}

$data = [
    'status' => $status,
];

// var_dump($data);
// die();

$woocommerce->put('orders/'.$id, $data);

header('Location: http://localhost:8080/AppWooC-final/listOrders.php');


?>