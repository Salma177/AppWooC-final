<?php include 'commerce.php'; 


$id      =  $_GET['id'];
$username    =  $_GET['customerUsername'];
$email    =  $_GET['customerEmail'];
$lastname    =  $_GET['customerLastname'];
$firstname    =  $_GET['customerFirstname'];

;



if ($username == null or $email == null or $lastname == null or $firstname == null) {
    echo 'error';
    exit();
}

$data = [
    'email' => $email,
    'first_name' => $firstname,
    'last_name' => $lastname,  
    'username' => $username,
];

// var_dump($data);
// die();

$woocommerce->put('customers/'.$id, $data);

header('Location: http://localhost:8080/AppWooC-final/listCustomers.php');


?>