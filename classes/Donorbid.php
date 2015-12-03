<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 4:11 PM
 */
session_start();

require_once("Charity.php");
require_once("Item.php");
require_once("User.php");
require_once("db.php");
require_once("Utility.php");
require_once("Cause.php");

$db = new db();
$util = new Utility();
?>