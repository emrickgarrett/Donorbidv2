<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 12/3/2015
 * Time: 1:45 AM
 */

require_once("../classes/Donorbid.php");

$username = $_POST["username"];
$password = $_POST["password"];


$user = $db -> login($username, $password);

if($user){
    $_SESSION["user"] = $user;
    echo "Username : " . $user -> getUsername() . " Charities " . $user -> getCharities() . " Address: " . $user -> getADdress() . " Card: " . $user -> getCard() .
         "Full Name: " . $user -> getFullName();
}else{
    header('HTTP/1.1 500 Internal Server Error');
    die("Wrong Username or Password");
}
?>