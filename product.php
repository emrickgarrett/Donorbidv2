<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/7/2015
 * Time: 00:14
 */

$item_name = $_GET['item'];
$price = $_GET['price'];
$descrip = $_GET['descrip'];
$non_profit = $_GET['non_profit'];
$image = $_GET['image'];

if($item_name === '')
    $item_name = 'ipod';
if($price === '')
    $price = '19.99';
if($descrip === '')
    $descrip = "Great Condition. Hardly Used, Works Like New.";
if($non_profit === '')
    $non_profit = "SPCA";
if($image === '')
    $image = 'OOPS!';

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
</HEAD>
<BODY>

<?php require("dry/header.php"); ?>
<div id="search_content">
    <div class="row">
        <div id="causes" class="col-lg-2">
            <!-- Causes/Items Here -->
            <h3 style="text-align:center;margin-top:0;text-decoration:underline;">Causes</h3>
            <ul style="margin-left:-1em;">
                <li><a href="#">Hunger <span style="font-size:.8em;" class="glyphicon glyphicon-play" aria-hidden="true"></span></a></li>
                <li><ul style="margin-left:-1.5em;">
                        <li><a href="#">Feeding America</a></li>
                        <li><a href="#">Freestore Foodbank</a></li>
                        <li><a href="#">Shared Harvest Foodbank</a></li>
                    </ul></li>

                <li><a href="#">Environment <span style="font-size:.8em;" class="glyphicon glyphicon-play" aria-hidden="true"></span></a></li>
                <li><ul style="margin-left:-1.5em;">
                        <li><a href="#">Sierra Club</a></li>
                        <li><a href="#">GreenPeace</a></li>
                        <li><a href="#">Wildlife Conservation Society</a></li>
                    </ul></li>
                <li><a href="#">Animal Welfare <span style="font-size:.8em;" class="glyphicon glyphicon-play" aria-hidden="true"></span></a></li>
                <li><ul style="margin-left:-1.5em;">
                        <li><a href="#">USPCA</a></li>
                        <li><a href="#">Cincinnati Zoo</a></li>
                        <li><a href="#">Save the Animals Foundation</a></li>
                    </ul></li>
            </ul>
        </div>

        <div id="product">
            <img style="width:350px;height:250px;" src="<?php echo $image;?>" alt="Donate_Image"/>
            
        </div>




    </div>
</BODY>
</HTML>