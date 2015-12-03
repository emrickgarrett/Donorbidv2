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

        $sql = "SELECT * FROM users WHERE user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            //create user based on data
            // output data of each row
            while($row = mysql_fetch_assoc($result)) {
                $temp = new User();
                $temp -> username = $row["username"];
                $temp -> setFullName($row["full_name"]);
                $temp -> setId($id);
                $temp -> setCharities($this -> getCharities($id));
                return $temp;
            }
        }else{
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
                $user -> setZipcode($this -> getZipcode($row["user_id"]));

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

        $sql = "SELECT * FROM user_charity_like WHERE user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);

        if(mysql_num_rows($result) > 0) {
            while($row = mysql_fetch_assoc($result)) {
                $sql = "SELECT * FROM charities WHERE charity_id = '" . $row["charity_id"] . "'";

                $result1 = mysql_query($sql, $this -> conn);
                if (mysql_num_rows($result1) > 0) {
                    while ($row2 = mysql_fetch_assoc($result1)) {
                        $temp = new Charity();
                        $temp->id = $row2["charity_id"];
                        $temp->name = $row2["charity_name"];
                        $temp->desc = $row2["charity_description"];
                        $charities[] = $temp;
                    }
                }
            }
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
            return "";
        }
    }

    function getAddress($id){
        $sql = "SELECT address from addresses WHERE user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            $row = mysql_fetch_assoc($result);
            return $row["address"];
        }else{
            return "";
        }
    }

    function getZipcode($id){
        $sql = "SELECT zipcode FROM addresses WHERE user_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);
        if(mysql_num_rows($result) > 0){
            $row = mysql_fetch_assoc($result);
            return $row["zipcode"];
        }else{
            return "00000";
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


        $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
        $result = mysql_query($sql, $this -> conn);

        if(mysql_num_rows($result) > 0){
            return "User Already Exists";
        }

        //long series of insert statements
        $sql = "INSERT into users VALUES(NULL, '" . $username . "', '" . $password . "', '')";

        $result = mysql_query($sql, $this -> conn);
        $user_id = mysql_insert_id();


        $sql = "INSERT into emails VALUES(NULL, '" . $email . "', '" . $user_id . "')";

        $result = mysql_query($sql, $this -> conn);
        $email_id = mysql_insert_id();

        $sql = "INSERT into credit_cards VALUES(NULL, '" . $card_number . "', '" . $cvc . "', '" . $expDate . "')";

        $result = mysql_query($sql, $this -> conn);
        $card_id = mysql_insert_id();

        $sql = "INSERT into user_cards VALUES(NULL, '" . $user_id . "', '" . $card_id . "')";
        mysql_query($sql, $this -> conn);

        $sql = "INSERT into addresses VALUES(NULL, '" . $zipcode . "', '" . $address . "', '" . $user_id . "' )";

        mysql_query($sql, $this -> conn);


        //Select User and login the user
        return $this -> login($username, $password);

    }

    function createProduct(){

    }

    function getProduct($id){

        //Get item from db
        $sql_p = "SELECT * from products WHERE product_id = '" . $id . "'";

        $result_p = mysql_query($sql_p, $this -> conn);

        if(mysql_num_rows($result_p) == 0){
            return null;
        }

        $row = mysql_fetch_assoc($result_p);

        $temp = new Item();
        $temp -> amt = $row["price"];
        $temp -> name = $row["product_name"];
        $temp -> desc = $row["description"];
        $temp -> short_desc = $row["description"];
        $temp -> setImage($row["image"]);
        $temp -> charity = $row["charity_id"];
        $temp -> seller = $this -> getUser($row["user_id"]);

        return $temp;
    }

    function getCharity($id){

        $sql = "SELECT * FROM charities WHERE charity_id = '" . $id . "'";

        $result = mysql_query($sql, $this -> conn);

        if(mysql_num_rows($result) == 0){
            return null;
        }

        $row = mysql_fetch_assoc($result);

        $temp = new Charity();
        $temp -> name = $row["charity_name"];
        $temp -> desc = $row["charity_description"];
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

        $sql = "SELECT * FROM products ORDER BY price DESC";

        $result = mysql_query($sql, $this -> conn);

        $count = 0;
        $data = array();
        if(mysql_num_rows($result) > 0){
            while($row = mysql_fetch_assoc($result)){
                if($count < 3) {
                    $item = new Item();
                    $item->image = $row['image'];
                    $item->name = $row['product_name'];
                    $item->amt = $row['price'];
                    $item->id = $row['product_id'];
                    $data[$count] = $item;

                    $count++;
                }
            }
        }

        return $data;
    }


    function printItems($search){

        $sql = "SELECT * FROM products WHERE product_name LIKE '%" . $search . "%'";

        $result = mysql_query($sql, $this -> conn);

        $dummy_array = array();
        $number_of_dummies = 0;
        if(mysql_num_rows($result) > 0){
            while($row = mysql_fetch_assoc($result)) {
                $dummy_array[] = $row["product_id"];
                $number_of_dummies++;
            }
        }else{
            return "Found No Items For " . $search . "...";
        }

        //Print stuff below
        $temp = "";
        //get Data
        $count = 0;
        for($i = 0; $i < $number_of_dummies/3; $i++){
            $temp .= "<div class='row' style='text-align:center;margin-bottom:2em;'>";
            for($j = 0; $j < 3 && $count < $number_of_dummies; $j++){
                $item = $this -> getProduct($dummy_array[$count]);
                if(!is_null($item)) {
                    $temp .= "<div class='col-lg-4'>";
                    $temp .= "<a href='product.php?id=" . $dummy_array[$count] . "'><img style='width:200px;height:150px;' src='" . $item->getImage() . "' alt='" . $item->getShortDesc() . "'/></a>";
                    $temp .= "<div class='item-description'>";
                    $temp .= "<span><a href='product.php?id=" . $dummy_array[$count] . "'>" . $item->getName() . "</a></span><br/>";
                    $temp .= "<span>Current Bid: <span class='money'>$" . $item->getAmt() . "</span></span><br/>";
                    //$temp .= "<span>Benefits: <a href='viewcharity.php?id=" . $item->getCharity() . "'>" . $this->getCharity($item->getCharity())->getName() . "</a></span>";
                    $temp .= "</div>";
                    $temp .= "</div>";
                }
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