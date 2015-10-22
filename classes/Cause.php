<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/22/2015
 * Time: 1:23 PM
 */

class Cause{
    public $id = -1;
    public $name = "Default";
    public $descrip = "Default";
    public $dollars_raised = 0.00;

    public function Cause(){

    }

    public function __destruct(){

    }

    public function getId(){
        return $this -> id;
    }

    public function setId($id){
        $this -> id = $id;
    }

    public function getName(){
        return $this -> name;
    }

    public function setName($name){
        $this -> name = $name;
    }

    public function getDesc(){
        return $this -> descrip;
    }

    public function setDesc($desc){
        $this -> descrip = $desc;
    }

    public function getDollarsRaised(){
        return $this -> dollars_raised;
    }

    public function setDollarsRaised($dollars_raised){
        $this -> dollars_raised = $dollars_raised;
    }
}


