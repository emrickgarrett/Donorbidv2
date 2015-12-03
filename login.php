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
    <span class="header-text">Log-in</span>
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
        <div>
            <button id="login-button" type="button" class="button" style="float:left;">Log In</button>
            <span style="float:right;">No account? Sign up <a href="createAccount.php">here!</a></span>
            <br/>
            <br/>
        </div>
    </div>


</div>
<script type="text/javascript">
$("#login-button").click(function() {

    var username = $("#username").val();
    var password = $("#password").val();

    //add to db and login
    $.ajax({
        type: 'POST',
        url: 'php_func/login.php',
        data: {
            username: username, password: password
        },
        success: function(data) {
            window.location.href="index.php";
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText);
        }
    });

});

</script>

</BODY>

</HTML>
