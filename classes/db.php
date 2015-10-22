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

    function getCharity($id){
        $temp = new Charity();
        $temp -> name = "Feeding America";
        $temp -> desc = "This is an example description of a Charity that will be replaced by actual descriptions.";
        $temp -> dollars = 127.18;
        $temp -> id = $id;
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


    function printItems($search){
        //Print stuff below
        $temp = "";
        //get Data
        $number_of_dummies = 9;
        $dummy_array = array(-1, -2, -3, -4, -5, -6, -7, -8, -9);
        $count = 0;
        for($i = 0; $i < $number_of_dummies/3; $i++){
            $temp .= "<div class='row' style='text-align:center;margin-bottom:2em;'>";
            for($j = 0; $j < 3 && $count < $number_of_dummies; $j++){
                $item = $this -> getProduct($dummy_array[$count]);
                $temp .= "<div class='col-lg-4'>";
                    $temp .= "<a href='product.php?id=" . $item -> getID() ."'><img style='width:200px;height:150px;' src='" . $item -> getImage() . "' alt='" . $item -> getShortDesc() . "'/></a>";
                    $temp .= "<div class='item-description'>";
                        $temp .= "<span><a href='product.php?id=" . $item -> getID() . "'>" . $item -> getName() . "</a></span><br/>";
                        $temp .= "<span>Current Bid: <span class='money'>$" . $item -> getAmt() . "</span></span><br/>";
                        $temp .= "<span>Benefits: <a href='viewcharity.php?id=" . $item -> getCharity() . "'>" . $this -> getCharity($item -> getCharity()) -> getName() . "</a></span>";
                    $temp .= "</div>";
                $temp .= "</div>";
                $count++;
            }
            $temp .= "</div>";
        }

        return $temp;
    }

    function printCharities($search){
        $temp = "";



        return $temp;
    }

    function printCauses($search){
        $temp = "";



        return $temp;
    }
    /*** End Query Functions ***/


}