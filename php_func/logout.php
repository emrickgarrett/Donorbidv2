<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 12/3/2015
 * Time: 1:25 PM
 */
session_start();
$_SESSION['user'] = NULL;

echo "<script type='text/javascript'>window.location.href='../index.php';</script>";

?>