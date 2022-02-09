
<?php include 'commerce.php'; 

$username    =  $_GET['customerUsername'];
$email    =  $_GET['customerEmail'];
$lastname    =  $_GET['customerLastname'];
$firstname    =  $_GET['customerFirstname'];
$role =  "customer";



if ($username == null or $email == null or $lastname == null or $firstname == null) {
    echo 'error';
    exit();
}

$data = [
    'email' => $email,
    'first_name' => $firstname,
    'last_name' => $lastname,
    'role' => $role,    
    'username' => $username,


];

// var_dump($data);

$woocommerce->post('customers', $data);

header('Location: http://localhost:8080/AppWooC-final/listCustomers.php');


?>