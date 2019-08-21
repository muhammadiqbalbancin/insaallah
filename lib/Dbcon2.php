<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 4:42 PM
 */
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ketapangindah';

$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con){
    die('connection failed :'.mysqli_error());
}
?>
