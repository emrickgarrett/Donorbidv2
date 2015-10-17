<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 11:46 AM
 */

class Product {

    public $seller = NULL;
    public $amt = 0.00;
    public $name = "default";
    public $desc = NULL;
    public $charity = NULL;


    function Product(){

    }

    function __destruct(){

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

    function getDesc(){
        return $this -> desc;
    }

    function setDesc($desc){
        $this -> desc = $desc;
    }

    function getCharity(){
        return $this -> charity;
    }

    function setCharity($charity){
        $this -> charity = $charity;
    }


}