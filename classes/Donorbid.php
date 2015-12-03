<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 4:11 PM
 */

//General API class. Call this file to get all Donorbid Classes and access to the database/utilities

require_once("Charity.php");
require_once("Item.php");
require_once("User.php");
require_once("db.php");
require_once("Utility.php");
require_once("Cause.php");

session_start();

$db = new db();
$util = new Utility();
?>