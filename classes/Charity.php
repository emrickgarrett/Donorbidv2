<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 11:49 AM
 */

class Charity {

    public $name = "default";
    public $desc = "default";
    public $dollars = 0.00;
    public $causes = array();

    function Charity(){
        $this -> dollars = 100.00;
        $this -> causes = array("twerking", "jerking", "smerking");
    }

    function __destruct(){

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
        return $this -> $desc;
    }

    function getDollars(){
        return $this -> $dollars;
    }

    function setDollars($dollars){
        $this -> dollars = $dollars;
    }

    function getCauses(){
        return $this -> causes;
    }

    function setCauses($causes){
        $this -> causes = $causes;
    }
}