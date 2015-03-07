<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/7/2015
 * Time: 07:33
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

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
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
    <div class="col-lg-10" style="text-align:center;">
        <div style="text-align:center;">
            <h3>Congratulations!</h3>
            <img style="margin-right:1em;margin-bottom:1em;" width="200px" height="150px" src="http://currys.cdn.dixons.com/css/themes/apple_ipad_air/img/ipad-intro.png" alt="profile_pic"/><br/>
            <div style="width:400px;margin: 0 auto;text-align:right;padding-right:100px;">
                <span>5% Towards Your Buyer's Charity: <span style="color:#2CBB76">$5</span></span><br/>
                <span>5% Towards Your Charity, Feeding America: <span style="color:#2CBB76">$5</span></span><br/>
                <span>5% Service Charge: <span style="color:red;">$5</span></span><br/>
                <span>85% is yours to choose! (Minus <span style="color:red;">2.75%</span> for Card Fees): <span style="color:#2CBB76;font-weight:bold;text-decoration:underline;">$82.25</span></span>
            </div>
        </div>

        <div id="slider_container" style="width:600px;margin-left:auto;margin-right:auto;margin-top:4em;">
            <div id="amount_you"></div>
            <div id="amount_non_profit"></div>
            <div id="you_don">You</div>
            <div id="slider" style="width:600px;"></div>
            <div id="non_profit_don">Feeding America</div>
        </div>

        <br/>
        <span style="font-size:1.0em;margin-bottom:1em;">A Tax Deductable receipt will be sent to you via email from your Non Profit upon confirming the selection.</span><br/>
        <button id="accept_button" style="width:300px;margin-top:1em;" class="btn btn-lg btn-success">Accept</button>
    </div>

</div>



<script>
    $(function() {
        $("#slider" ).slider({
            range: "min",
            value: 50,
            min:0,
            max:82.25,
            slide: function(event, ui){
                $("#amount_you").html("$" +  ui.value);
                $("#amount_non_profit").html("$" + (82.25 - ui.value));
            }
        });
        $("#amount_you").html("$" + $("#slider").slider("value"));
        $("#amount_non_profit").html("$" + (82.25 - $("#slider").slider("value")));
    });

    $(document).ready(function(){
        $("#accept_button").click(function(){
           if(confirm("Is Your Allocation Correct?")){
               alert("Thanks, your contributions are helping your favorite Non Profits!");
               window.location.href="search.php";
           }
        });
    });
</script>

</BODY>
</HTML>