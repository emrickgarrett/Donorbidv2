<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/7/2015
 * Time: 00:14
 */
require_once("classes/Donorbid.php");


$id = $_GET['id'];

$product = $db -> getProduct($id);
$charity = $db -> getCharity($product -> getCharity());
$seller = $db -> getUser($product -> getSeller());


$top_charity1 = $db -> getCharity($seller -> getCharities()[0]);
$top_charity2 = $db -> getCharity($seller -> getCharities()[1]);
$top_charity3 = $db -> getCharity($seller -> getCharities()[2]);
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
    <link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="css/donorbid.css">
    <script type="text/javascript" src="js/userFunctions.js"></script>
    <script type="text/javascript" src="js/product.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
        <div class="col-lg-10">
            <div class="row" style="margin-left:2em;margin-top:3em;">
                <div class="col-lg-4" id="product">
                    <div style="text-align:center;">
                        <img style="width:350px;height:250px;" src="<?php echo $product -> getImage();?>" alt="Donate_Image"/>
                        <span style="font-size:1.5em;display:block;"><?php echo $product -> getName();?></span>
                        <span style="display:block;">Current Bidding Price: $<span style="color:red;"><?php echo $product -> amt;?></span></span>
                        <span style="display:block;"><?php echo $product -> getShortDesc(); ?></span>
                        <span style="font-weight:bold;font-size:1.2em;">Benefits: <a href="viewcharity.php?id=<?php echo $charity -> getId();?>"><?php echo $charity -> getName(); ?></a></span>
                    </div>
                </div>
                <div class="col-lg-7" style="margin-left:6em;">
                    <div class="row">
                        <div  id="user_descrip" style=float:left;">
                            <div style="text-align:center;">
                                <div id="img_round" >
                                    <a href="profile.php?id=<?php echo $seller -> getId();?>"><img width="100px" height="100px" src="<?php echo $seller -> getImage(); ?>"/></a>
                                <br/>
                                <span style="text-align:center;margin-left:-1.5em;">
                                    <span id="username"><a href="profile.php?id=<?php echo $seller -> getId(); ?>"><?php echo $seller -> getUsername(); ?></a></span>

                                </span>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:.5em;float:left;margin-left:2em;">
                            <span style="font-size:1.5em;font-weight:bold;margin-left:-1em;">I Support...</span>
                            <ul style="display:inline;margin-left:-.5em;margin-top:-1em;">
                                <li style="margin-bottom:.5em;"><a href="viewcharity.php?id=<?php echo $top_charity1 -> getId();?>"><?php echo $top_charity1 -> getName(); ?></a></li>
                                <li style="margin-bottom:.5em;"><a href="viewcharity.php?id=<?php echo $top_charity2 -> getId();?>"><?php echo $top_charity2 -> getName(); ?></a></li>
                                <li><a href="viewcharity.php?id=<?php echo $top_charity3 -> getId();?>"><?php echo $top_charity3 -> getName(); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div  id="non_profit_descrip">
                            <span style="display:block;font-size:2em;"><?php echo $charity -> getName();?></span>
                            <p><a href='viewcharity.php?id=<?php echo $charity -> getId();?>'><?php echo $charity -> getName()?></a>: <?php echo $charity -> getDesc(); ?></p>

                            <div class="input-group" id="pay" style="max-width:150px;">
                                <input id="donate_amt" type="text" class="form-control" placeholder="$0.00" min="<?php echo $product -> getAmt(); ?>">
                                <div class="input-group-btn">
                                    <button id="bid_button" type="button" class="btn btn-large btn-primary">Bid!</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <hr/>
            <div id="product_description">
                <h3>Description</h3>
                <p><?php echo $product -> getLongDesc(); ?></p>
            </div>


        </div>




    </div>

    <script type="text/javascript">
        $(document).ready(function(){


            $("#bid_button").click(function(){

                var price = $("#donate_amt").val();

                swal({   title: "Are you sure?",   text: "Are you sure you want to bid on this for $" + price + "?",   type: "warning",   showCancelButton: true,
                    confirmButtonColor: "#AEDEF4",   confirmButtonText: "Yes, buy it!",   closeOnConfirm: false },
                    function(){   swal("Purchased!", "You will now be redirected!", "success");


                    var image = "<?php echo $image;?>";
                    var item_name = "<?php echo $item_name;?>";
                    var charity = "<?php echo $non_profit;?>";
                    window.location.href = "winner.php?image=" + image + "&name=" + item_name + "&charity=" + charity +"&price=" + price;


                    });

            });

        });
    </script>
</BODY>
</HTML>