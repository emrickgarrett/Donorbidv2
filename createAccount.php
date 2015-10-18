<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 9:09 PM
 */
    require_once("classes/Donorbid.php");
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
    <title>DonorBid.com</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/donorbid.css">
    <script type="text/javascript" src="js/userFunctions.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

</HEAD>
<BODY>
<?php require("dry/header-logo.php"); ?>

<div id="login_container">
    <span class="header-text">Create Account</span>
    <br/>
    <br/>
    <div id="login_credentials">
        <div class="input-group" style="display:inline;">
            <span class="input-group-addon" id="sizing-addon1">Username</span>
            <input id="username" type="text" class="form-control" placeholder="example" aria-describedby="username">
        </div>
        <br/>
        <div class="input-group" style="display:inline;">
            <span class="input-group-addon" id="sizing-addon1">Password</span>
            <input id="password" type="password" class="form-control" placeholder="*******" aria-describedby="password">
        </div>
        <br/><br/>
        <div class="input-group" style="margin-bottom:.5em;" >
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
            <input id="email" type="email" class="form-control" placeholder="example@example.com" aria-describedby="email">
        </div>
        <div class="input-group" style="margin-bottom:.5em;">
            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></span>
            <input id="card-number" type="number" class="form-control" placeholder="5555555555555555" aria-describedby="credit-card">
            <span class="input-group-addon">CVV</span>
            <input id="cvv" type="number" class="form-control" placeholder="555" aria-describedby="credit-card">
        </div>
        <div class="input-group" style="margin-bottom:.5em;">
            <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
            <input id="address" type="text" class="form-control" placeholder="123 example road, Germantown OH 45555">
        </div>
        <div>
            <button id="create_account-button" type="button" class="button" style="float:left;">Create Account</button>
            <span style="float:right;">Already have account? Login in <a href="login.php">here!</a></span>
            <br/>
            <br/>
        </div>
    </div>


</div>
<script type="text/javascript">
$("#create_account-button").click(function() {

    var username = $("#username").value;
    var password = $("#password").value;
    
    //create account and login

    window.location.href="index.php";

});

</script>

</BODY>

</HTML>
