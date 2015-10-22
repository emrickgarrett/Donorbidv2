/**
 * Created by Garrett on 3/6/2015.
 */


function productSearch(){
    $("#search_type").html("<span id='type'>Product</span> <span class='caret'></span>");
}

function charitySearch(){
    $("#search_type").html("<span id='type'>Charity</span> <span class='caret'></span>");
}

function causeSearch(){
    $("#search_type").html("<span id='type'>Cause</span> <span class='caret'></span>");
}


$(document).ready(function(){

    $("#search_bar").keypress(function (e) {
        if (e.which == 13) {
            window.location.href = "search.php?search=" + $("#search_bar").val() + "&type=" + $("#type").html();
        }
    });

});