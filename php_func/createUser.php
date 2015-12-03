<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 11/19/2015
 * Time: 4:41 PM
 */
require_once("../classes/Donorbid.php");

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$card_number = $_POST['cardNumber'];
$cvc = $_POST['cvc'];
$exp_date = "XX/XX"; // We are leaving this blank as a sort of verification system on the users card
$address = $_POST['address'];
$zipcode =  substr($address, sizeof($address)-6);
$address = substr($address, 0, sizeof($address)-6);

$user = $db -> createUser($username, $password, $email, $card_number, $cvc, $exp_date, $address, $zipcode);

if(!is_string($user)){
    if($user){
        $_SESSION = $user;
        echo "Account Created";
    }else{
        header('HTTP/1.1 500 Internal Server Error');
        die("Account Creation Failed");
    }
}else{
    header('HTTP/1.1 500 Internal Server Error');
    die($user);
}
?>