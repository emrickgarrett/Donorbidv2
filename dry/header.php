<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/6/2015
 * Time: 19:38
 */

?>

<!-- Stuff goes here -->

<div class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" style="font-size:2.5em;">DonorBid</a>
            </div>
            <div>
                    <div class="dropdown pull-right" style="margin-top:.5em;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="font-size:1.5em;" class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Tracker</a></li>
                            <li><a href="#">Auction Item</a></li>
                            <li><a href="#">Global Stats</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </nav>
</div>
<div id="search">
    <div class="search_nav">

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <span id="bid_text">Bid Now!</span>
            </div>
            <div class="col-lg-6">
                <div class="input-group" style="margin-left:-8em;">
                    <div class="input-group-btn"">
                        <button type="button" id="search_type" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Product <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" onclick="productSearch();">Product</a></li>
                            <li><a href="#" onclick="causeSearch();">Cause</a></li>
                            <li><a href="#" onclick="charitySearch();">Charity</a></li>
                            <li class="divider"></li>
                            <li><a href="#">What does this mean?</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <input type="text" class="form-control" aria-label="..." placeholder="Dog Collars">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
    </div>

</div>



