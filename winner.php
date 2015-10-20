<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/7/2015
 * Time: 06:10
 */

require_once("classes/Donorbid.php");

$id = $_GET['id'];

$product = $db -> getProduct($id);
$charity = $db -> getCharity($product -> getCharity());
$seller = $db -> getUser($product -> getSeller());
$user = $_SESSION['user'];

if(!$util -> isValidUser($user)){
    //Disabled until login is working!
    //header( 'Location: login.php' ) ;
}else{
    //for temporary debuggin
    $user = new User();
}


$user = new User();
//temporary here
$seller-> setImage("images/creep.jpg");
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

<?php require("dry/header.php");?>
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
    <div class="col-lg-10" >
            <div class="row" style="margin-bottom:15em;">
                <div class="col-lg-4" id="buyer_info">
                    <img style="margin-right:1em;margin-bottom:1em;" width="200px" height="250px" src="<?php echo $user -> getImage();?>" alt="profile_pic"/><br/>
                    <span>5% goes towards</span>

                    <!-- Single button -->
                    <div class="btn-group">
                        <button id="non_profit_button_select" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Select a Non Profit <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="spca_but">SPCA</a></li>
                            <li><a id="freestore_but">Free Store Foodbank</a></li>
                            <li><a id="red_cross_but">The Red Cross</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Find Another One ></a></li>
                        </ul>
                    </div><br/>
                    <span>Total towards your cause: <span style="color:#2CBB76;font-weight:bold;text-decoration:underline;">$<?php echo $product -> getAmt() *.05;?>!</span></span>

                </div>
                <div class="col-lg-4" id="item_info">
                    <h3>Congratulations!</h3>
                    <img style="margin-right:1em;margin-bottom:1em;" width="200px" height="150px" src="<?php echo $product -> getImage(); ?>" alt="profile_pic"/><br/>
                    <span><p>You Bought this <?php echo $product -> getName(); ?> for <span style="color:#2CBB76;font-weight:bold;text-decoration:underline;">$<?php echo $product -> getAmt(); ?>!</span></p></span>
                    <span><p>5% is taken as a Service Charge - <span style="color:red;">$<?php echo $product -> getAmt()*.05;?></span></p></span>
                </div>
                <div class="col-lg-4" id="seller_info">
                    <img style="margin-right:1em;margin-bottom:1em;" width="200px" height="250px" src="<?php echo $seller -> getImage();?>" alt="profile_pic"/><br/>
                    <span>5% Towards <?php echo $charity -> getName(); ?>: <span style="color:#2CBB76;font-weight:bold;text-decoration:underline;">$<?php echo $product -> getAmt()*.05;?>!</span></span><br/>
                    <span>85% for Seller <span style="color:#2CBB76;font-weight:bold;text-decoration:underline;">$<?php echo $product -> getAmt()*.85;?>!</span></span>
                    <hr style="margin:0;color:gray;"/>
                    <span>-2.75% for Credit Card Processing: <span style="color:red;">$<?php echo $product -> getAmt()*.0275;?>!</span></span>
                </div>
            </div>
        <hr style="color:black;"/>
        <input style="width:250px;float:left;" class="form-control" type="text" placeholder="Street"><input style="width:150px;" class="form-control" type="number" placeholder="Zip">
        <input style="width:250px;margin-top:1em;" class="form-control" type="tel" placeholder="Phone Number">

        <button id="confirm_button" style="margin-top:1em;margin-bottom:5em;" class="btn btn-lg btn-success">Confirm</button>
    </div>
</div>



<script type="text/javascript">

    $(document).ready(function(){
        $("#spca_but").click(function(){
           $("#non_profit_button_select").html("SPCA");
        });
        $("#freestore_but").click(function(){
            $("#non_profit_button_select").html("Freestore Foodbank");
        });
        $("#red_cross_but").click(function(){
            $("#non_profit_button_select").html("The Red Cross");
        });

        $("#confirm_button").click(function(){
           alert("Your Order has been placed");
           window.location.href="search.php";
        });
    });
</script>

</BODY>
</HTML>