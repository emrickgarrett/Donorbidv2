<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/6/2015
 * Time: 23:02
 */


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
        <div id="items" class="col-lg-10">
            <!-- Items Go Here -->
            <div class="row" style="text-align:center;margin-bottom:2em;">
                <div class="col-lg-4">
                    <a href="product.php?image=https://www.apple.com/ipod-shuffle/images/hero1.jpg&price=59.99&non_profit=Feeding%20America&item_name=iPod&descrip=New%20Ipod%20Shuffle%20Like%20New"><img style="width:200px;height:150px;" src="https://www.apple.com/ipod-shuffle/images/hero1.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="product.php?image=https://www.apple.com/ipod-shuffle/images/hero1.jpg&price=59.99&non_profit=Feeding%20America&item_name=iPod&descrip=New%20Ipod%20Shuffle%20Like%20New">Ipod Shuffle</a></span><br/>
                        <span>Current Bid: <span class="money">$59.99</span></span><br/>
                        <span>Benefits: <a href="#">Feeding America</a></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="product.php?image=http://d31snyb1jsf9xb.cloudfront.net/services/image.aspx/media/images-product/dog-collar-kit-44710-03.jpg&price=19.99&non_profit=SPCA&item_name=Dog%20Collar&descrip=New%20Dog%20Collar%20Like%20New"><img style="width:200px;height:150px;" src="http://d31snyb1jsf9xb.cloudfront.net/services/image.aspx/media/images-product/dog-collar-kit-44710-03.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="product.php?image=http://d31snyb1jsf9xb.cloudfront.net/services/image.aspx/media/images-product/dog-collar-kit-44710-03.jpg&price=19.99&non_profit=SPCA&item_name=Dog%20Collar&descrip=New%20Dog%20Collar%20Like%20New">Premium Dog Collar</a></span><br/>
                        <span>Current Bid: <span class="money">$19.99</span></span><br/>
                        <span>Benefits: <a href="#">SPCA</a></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="product.php?image=http://thepoliticalcarnival.net/wp-content/uploads/2012/07/dog-whistle.jpg&price=39.99&non_profit=Save%20The%20Animals%20Foundation&item_name=Dog%20Whistle&descrip=New%20Dog%20Whistle%20Slightly%20Used"><img style="width:200px;height:150px;" src="http://thepoliticalcarnival.net/wp-content/uploads/2012/07/dog-whistle.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="product.php?image=http://thepoliticalcarnival.net/wp-content/uploads/2012/07/dog-whistle.jpg&price=39.99&non_profit=Save%20The%20Animals%20Foundation&item_name=Dog%20Whistle&descrip=New%20Dog%20Whistle%20Slightly%20Used">Dog Whistle</a></span><br/>
                        <span>Current Bid: <span class="money">$39.99</span></span><br/>
                        <span>Benefits: <a href="#">Save The Animals Foundation</a></span>
                    </div>
                </div>
            </div>

            <div class="row" style="text-align:center;margin-bottom:2em;">
                <div class="col-lg-4">
                    <a href="#"><img style="width:200px;height:150px;" src="http://images.wisegeek.com/black-desktop-computer.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="#">Desktop Computer</a></span><br/>
                        <span>Current Bid: <span class="money">$449.99</span></span><br/>
                        <span>Benefits: <a href="#">ALS Foundation</a></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="#"><img style="width:200px;height:150px;" src="http://www.rhodyoysters.com/wp-content/uploads/wp-checkout/images/gift-card-1370463543.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="#">$50 Gift Card</a></span><br/>
                        <span>Current Bid: <span class="money">$29.99</span></span><br/>
                        <span>Benefits: <a href="#">GreenPeace</a></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="#"><img style="width:200px;height:150px;" src="http://ogio.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/r/e/renegade_black_2.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="#">Backpack</a></span><br/>
                        <span>Current Bid: <span class="money">$54.99</span></span><br/>
                        <span>Benefits: <a href="#">Red Cross</a></span>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align:center;margin-bottom:2em;">
                <div class="col-lg-4">
                    <a href="#"><img style="width:200px;height:150px;" src="http://media.engadget.com/img/product/25/k1p/blackberry-curve-9300-29g1-800.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="#">Blackberry Device</a></span><br/>
                        <span>Current Bid: <span class="money">$149.00</span></span><br/>
                        <span>Benefits: <a href="#">C3DC</a></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="#"><img style="width:200px;height:150px;" src="http://cincinnati.reds.mlb.com/cin/images/ticketing/y2009/bargains_tickets.gif" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="#">Cincinnati Reds Tickets</a></span><br/>
                        <span>Current Bid: <span class="money">$4.99</span></span><br/>
                        <span>Benefits: <a href="#">Cincinnati Zoo</a></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="#"><img style="width:200px;height:150px;" src="http://upload.wikimedia.org/wikipedia/commons/c/c1/Carnival-Freedom-Cruise-Ship.jpg" alt="ipod"/></a>
                    <div class="item-description">
                        <span><a href="#">Two Cruise Tickets</a></span><br/>
                        <span>Current Bid: <span class="money">$499.98</span></span><br/>
                        <span>Benefits: <a href="#">Wildlife Conservation Society</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</BODY>
</HTML>