<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 10/17/2015
 * Time: 8:36 PM
 */

    //Just erase the user session, log them out!

$_SESSION["user"] = "";
echo "<script type='text/javascript'>window.location.href='index.php';</script>";