<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 11:46 AM
 */

class Item {

    public $id = -1;
    public $seller = NULL;
    public $amt = 0.00;
    public $name = "default";
    public $short_desc = NULL;
    public $long_desc = NULL;
    public $charity = NULL;
    public $image = "images/default1.png";


    function Item(){
        $this -> id = -1;
        $this -> seller = new User();
        $this -> amt = 10.00;
        $this -> short_desc = "Like new";
        $this -> long_desc = "Lorim Ipsum Default default default ipsum lorem lipsum flipsum burger hamger heueueue default";
        $this -> charity = 1;

    }

    function __destruct(){

    }

    function getID(){
        return $this -> id;
    }

    function setID($id){
        $this -> id = $id;
    }

    function getSeller(){
        return $this -> seller;
    }

    function setSeller($seller){
        $this -> seller = $seller;
    }

    function getAmt(){
        return $this -> amt;
    }

    function setAmt($amt){
        $this -> amt = $amt;
    }

    function getName(){
        return $this -> name;
    }

    function setName($name){
        $this -> name = $name;
    }

    function getShortDesc(){
        return $this -> short_desc;
    }

    function setShortDesc($desc){
        $this -> short_desc = $desc;
    }

    function getLongDesc(){
        return $this -> long_desc;
    }

    function setLongDesc($desc){
        $this -> long_desc = $desc;
    }

    function getCharity(){
        return $this -> charity;
    }

    function setCharity($charity){
        $this -> charity = $charity;
    }

    function getImage(){
        return $this -> image;
    }

    function setImage($image){
        if($image !== "") {
            $this->image = $image;
        }
    }


}