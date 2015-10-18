<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 7:24 PM
 */

class Utility {


    function getUserMenu($user){
        if($this -> isValidUser($user)){
            //Give User Menu
            return "" .
            "<li><a href='profile.php?full_name=Dwight%20Danger&image=images/creep.jpg&username=dwight72'>Profile</a></li>" .
            "<li><a href='seller.php'>Sold Items <span style='font-size:.8em;' class='badge'>1</span></a></li>" .
            "<li><a href=''>Global Stats</a></li>" .
            "<li><a id='logout' href='#'>Log Out</a></li>";
        }else{
            return "<li><a href='createAccount.php'>Create Account</a></li>" .
                "<li><a href='login.php' id='login'>Log In</a></li>";
        }
    }

    function isValidUser($user){
        return $this -> isLoggedIn();
    }

    function isLoggedIn(){
        if($_SESSION["user"] != ""){
            return true;
        }
        return false;
    }
}