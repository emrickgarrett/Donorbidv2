<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 11:34 AM
 */

class User {

    private $id = -1;
    public $username = "Guest";
    private $password = "";
    private $full_name = "";
    private $email = "";
    private $address = "";
    private $cardID = -1;
    public $charities = array();
    public $image = "";

    function User(){
        //default
        $this -> full_name = "Pam Powers";
        $this -> email = "default@default.com";
        $this -> address = "1123 default rd, default, default, 55555";
        $this -> charities = array("charity1", "charity2", "charity3");
        $this -> image = "images/pam.jpg";
    }


    function __destruct(){

    }

    function getId(){
        return $this -> id;
    }

    function setId($id){
        $this -> id = $id;
    }

    function getUsername(){
        return $this -> username;
    }

    function setUsername($username){
        $this -> username = $username;
    }

    function getFullName(){
        return $this -> full_name;
    }

    function setFullName($name){
        $this -> full_name = $name;
    }

    function setPassword($password){
        $this -> password = $password;
    }

    function getEmail(){
        return $this -> email;
    }

    function setEmail($email){
        $this -> email = $email;
    }

    function getAddress(){
        return $this -> address;
    }

    function setAddress($address){
        $this -> address = $address;
    }

    function getCard(){
        //do query
    }

    function setCard($cardID){
        $this -> cardID = $cardID;
    }

    function getCharities(){
        return $this -> charities;
    }

    function setCharities($charities){
        $this -> charities = $charities;
    }

    function getImage(){
        return $this -> image;
    }

    function setImage($image){
        $this -> image = $image;
    }

    function storeUser(){
        $_SESSION["user"] = $this;
    }

}