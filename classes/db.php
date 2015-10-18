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
    function getUser(){
        return new User();
    }

    function createUser(){

    }

    function createProduct(){

    }

    function getProduct(){
        return new Item();
    }

    function getCharity(){
        return new Charity();
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