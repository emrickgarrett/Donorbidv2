<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/6/2015
 * Time: 19:39
 */
require("classes/Donorbid.php");
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
    <?php require('dry/header.php'); ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <span class="descrip">Donate to Your Causes</span>
                <img src="http://getbootstrap.com/2.3.2/assets/img/examples/slide-02.jpg" alt="Donate">
            </div>

            <div class="item">
                <span class="descrip">Track Your Progress</span>
                <img src="http://getbootstrap.com/2.3.2/assets/img/examples/slide-02.jpg" alt="Charity">
            </div>

            <div class="item">
                <span class="descrip">Generate Good Will</span>
                <img src="http://getbootstrap.com/2.3.2/assets/img/examples/slide-02.jpg" alt="Auction">
            </div>

            <div class="item">

                <img src="http://getbootstrap.com/2.3.2/assets/img/examples/slide-02.jpg" alt="Bid">
                <span class="descrip">Friendly Competition With Your Peers, Unlock Rewards</span>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div id="top_items" style="margin-top:1em;">
        <h3 style="margin-left:3em;text-decoration:underline;">Top Items:</h3>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3" style="text-align:center;padding:.5em;">
                <a href="product.php?id=<?php echo $db -> getTopItems()[0] -> getID(); ?>"><img width="250px" height="150px" src="<?php echo $db -> getTopItems()[0] -> getImage(); ?>" alt="ipod"/></a>
                <div>
                    <p><?php echo $db -> getTopItems()[0] -> getName(); ?> Starts At: $<?php echo $db -> getTopItems()[0] -> getAmt(); ?></p>
                    <p>5% of Proceeds Go to <a href="#"><?php echo $db -> getCharity($db -> getTopItems()[0] -> getCharity()) -> getName(); ?></a></p>
                </div>
            </div>
            <div class="col-lg-4" style="text-align:center;padding:.5em;">
                <a href="product.php?id=<?php echo $db -> getTopItems()[1] -> getID(); ?>"><img width="250px" height="150px" src="<?php echo $db -> getTopItems()[1] -> getImage(); ?>" alt="ipod"/></a>
                <div>
                    <p><?php echo $db -> getTopItems()[1] -> getName(); ?> Starts At: $<?php echo $db -> getTopItems()[1] -> getAmt(); ?></p>
                    <p>5% of Proceeds Go to <a href="#"><?php echo $db -> getCharity($db -> getTopItems()[1] -> getCharity()) -> getName(); ?></a></p>
                </div>
            </div>
            <div class="col-lg-3" style="text-align:center;padding:.5em;">
                <a href="product.php?id=<?php echo $db -> getTopItems()[2] -> getID(); ?>"><img width="250px" height="150px" src="<?php echo $db -> getTopItems()[2] -> getImage(); ?>" alt="ipod"/></a>
                <div>
                    <p><?php echo $db -> getTopItems()[2] -> getName(); ?> Starts At: $<?php echo $db -> getTopItems()[2] -> getAmt(); ?></p>
                    <p>5% of Proceeds Go to <a href="#"><?php echo $db -> getCharity($db -> getTopItems()[2] -> getCharity()) -> getName(); ?></a></p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

    </div>


</BODY>

</HTML>
