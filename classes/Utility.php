<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 7:24 PM
 */

class Utility {


    //Print menu in the top Right based on whether a user is logged in or not
    function getUserMenu($user){
        if($this -> isValidUser()){
            //Give User Menu
            $user = $_SESSION["user"];
            return "" .
            "<li><a href='profile.php?id=" . $user -> getId() . "'>Profile</a></li>" .
            "<li><a href='seller.php'>Sold Items <span style='font-size:.8em;' class='badge'>1</span></a></li>" .
            "<li><a href=''>Global Stats</a></li>" .
            "<li><a id='logout' href='php_func/logout.php'>Log Out</a></li>";
        }else{
            return "<li><a href='createAccount.php'>Create Account</a></li>" .
                "<li><a href='login.php' id='login'>Log In</a></li>";
        }
    }

    //Determine if it's a valid user (never got past a basic login)
    function isValidUser(){
        return $this -> isLoggedIn();
    }

    //Check if user is logged in
    function isLoggedIn(){
        if(isset($_SESSION["user"])){
            return true;
        }
        return false;
    }
}