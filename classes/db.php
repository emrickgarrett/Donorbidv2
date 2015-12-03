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
    //create connection/close connections
    //Obviously in real system you don't make this obvious and submit to Github
    public $servername = "localhost";
    public $username = "root";
    public $password = "eUqJd2g2mx";

    function db(){


        $this -> connect();
    }

    function __destruct(){
        //close connection
        $this -> disconnect();
    }

    function connect(){
        // Create connection

        $this -> conn = mysql_connect($this -> servername, $this -> username, $this -> password);

        // Check connection
        if (!$this -> conn) {
            die("Connection failed: " . mysql_error());
        }

        mysql_select_db($this -> db_name, $this -> conn);
        //echo "Connected successfully";

    }

    function disconnect(){
        mysql_close($this -> conn);
    }

    /*** Functions to create for functionality for the site... */
    function getUser($id){

        $sql = "SELECT username, full_name FROM users WHERE user_id '= " . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            //create user based on data
            // output data of each row
            while($row = mysql_fetch_assoc($result)) {
                $temp = new User();
                $temp -> username = $row["username"];
                $temp -> setFullName($row["full_name"]);
                return $temp;
            }
        }else{
            echo "ERROR : " . mysql_error();
            return null;
        }
        return null;
    }

    function login($username, $password){
        $sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";

        $result = mysql_query($sql, $this -> conn);

        if(mysql_num_rows($result) > 0){
            //successful login
            while($row = mysql_fetch_assoc($result)){
                $user = new User();

                $user -> charities = $this -> getCharities($row["user_id"]);
                $user -> setEmail($this -> getEmail($row["user_id"]));
                $user -> setAddress($this -> getAddress($row["user_id"]));

                $card = $this -> getCard($row["user_id"]);
                $user -> setCard($card[0]);

                $user -> setFullName($row["full_name"]);
                $user -> setUsername($row["username"]);
                $user -> setId($row["user_id"]);
                return $user;
            }
        }else{
            return null; //Unsuccessful login
        }
        return null;
    }

    function getCharities($id){
        $charities = array();

        $sql = "SELECT * FROM user_charity_like INNER JOIN charities ON user_charity_like.charity_id = charities.charity_id AND user_charity_like.user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            while($row = mysql_fetch_assoc($result)){
                $temp = new Charity();
                $temp -> id = $row["charity_id"];
                $temp -> name = $row["name"];
                $temp -> desc = $row["desc"];
                $charities[] = $temp;
            }
        }else{
            return null;
        }

        return $charities;
    }

    function getEmail($id){
        $sql = "SELECT email from emails WHERE user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            $row = mysql_fetch_assoc($result);
            return $row["email"];
        }else{
            return "No Email";
        }
    }

    function getAddress($id){
        $sql = "SELECT address from addresses WHERE user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            $row = mysql_fetch_assoc($result);
            return $row["address"];
        }else{
            return "No Address";
        }
    }

    function getCard($id){
        $sql = "SELECT * FROM user_cards INNER JOIN credit_cards ON user_cards.card_id = credit_cards.card_id AND user_cards.user_id = '" . $id . "'";
        $data = array();
        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            $row = mysql_fetch_assoc($result);
            $data[] = $row["card_id"];
            $data[] = $row["card_number"];
            $data[] = $row["cvc"];
            $data[] = $row["expiration_date"];
            return $data;
        }else{
            return null;
        }
    }

    function createUser($username, $password, $email, $card_number, $cvc, $expDate, $address, $zipcode){

        $user = new User();

        echo "User Created with values ";

        return $user;

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