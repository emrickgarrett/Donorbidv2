<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 11:38 AM
 */

class db{

    public $db_name = "donorbiddb";
    public $conn = NULL;

    function db(){
        //create connection/close connections
    }

    function __destruct(){
        //close connection
    }

    function connect(){

    }

    function disconnect(){

    }

    /*** Functions to create for functionality for the site... */
    function getUser($id){
        $temp = new User();
        $temp -> username = "swagyolo420";
        $temp -> setFullName("Pam Powers");
        return $temp;
    }

    function createUser(){

    }

    function createProduct(){

    }

    function getProduct($id){

        //Get item from db
        $temp = new Item();
        $temp -> amt = 15.00;
        $temp -> name = "Example Item";
        $temp -> desc = "This is an example description";
        $temp -> image = "default1.jpg";
        $temp -> charity = 1;
        $temp -> seller = 1;
        return new Item();
    }

    function getCharity(){
        $temp = new Charity();
        $temp -> name = "Feeding America";
        $temp -> desc = "This is an example description of a Charity that will be replaced by actual descriptions.";
        $temp -> dollars = 127.18;
        return $temp;
    }

    function createCharity(){

    }

    function buyItem(){

    }

    function getItems(){
        return array(new Item(), new Item(), new Item(), new Item(), new Item(), new Item(), new Item(), new Item());
    }

    function sellItem(){

    }

    function searchItem(){

    }

    function searchCharity(){

    }

    function searchCause(){

    }

    function createCause(){

    }

    function getCause(){
        return "watch me nay nay";
    }

    function getTopItems(){
        $item1 = new Item();
        $item1 -> image = "images/default1.jpg";
        $item1 -> name = "default1";

        $item3 = new Item();
        $item3 -> image = "images/default3.jpg";
        $item3 -> name = "default3";
        return array($item1, new Item(), $item3);
    }

    /*** End Query Functions ***/


}