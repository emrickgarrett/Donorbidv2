<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 11:34 AM
 */

class user {

    public $username = "Guest";
    public $password = "";
    public $email = "";
    public $address = "";
    public $cardID = -1;
    public $charities = array();

    function user(){

    }


    function __destruct(){
        echo "Destroyed noob";
    }

}