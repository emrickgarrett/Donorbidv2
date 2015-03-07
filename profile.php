<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/7/2015
 * Time: 04:24
 */

$image = $_GET['image'];
$name = $_GET['full_name'];
$username = $_GET['username'];

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

<?php require("dry/header.php"); ?>
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
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-6">
            <div id="left_content">
                <span class="image_round">
                    <img style="margin-right:1em;margin-bottom:1em;" width="200px" height="250px" src="<?php echo $image; ?>" alt="profile_pic"/>
                </span>
                <div style="margin-top:-9em;margin-left:16em;">
                    <span style="font-size:1.2em;"><?php echo $name; ?></span><br/>
                    <span id="username"><a href="#"><?php echo $username;?></a></span>
                    <span style="color:#45BF84"> Online!</span>
                </div>
            </div>
            <div style="margin-left:1em;margin-right:1em;margin-top:6em;">
                <span style="font-size:1.5em;font-weight:bold;text-decoration:underline;">My Charities</span>
                <ul>
                    <li><a href="#">SPCA</a> - <span style="color:#45BF84;font-weight:bold;">$317.92</span></li>
                    <li><a href="#">Feeding America</a> - <span style="color:#45BF84;font-weight:bold;">$117.44</span></li>
                    <li><a href="#">The Red Cross</a> - <span style="color:#45BF84;font-weight:bold;">$50.00</span></li>
                </ul>

            </div>
            </div>
            <div class="col-lg-6">
                <div id="right_content">
                    <a href="#">Items For Sale <span class="glyphicon glyphicon-tags"></span></a> <a href="#"> Contact <span class="glyphicon glyphicon-envelope"></span></a>
                </div><br/>
                <div id="description-profile">
                    <p>I'm a Pet Parent, and I love my kids! I've got two dogs, a cat, and a rabbit currently, and actively support my favorite Charity SPCA thanks to DonorBid.com!</p>
                </div>
            </div>
        </div>
    </div>

</div>

</BODY>
</HTML>