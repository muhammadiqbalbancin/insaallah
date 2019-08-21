<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/24/2017
 * Time: 10:51 PM
 */
session_start();
unset($_SESSION['pk']);
session_destroy();
header("location:../admin/index.php");
exit();
?>