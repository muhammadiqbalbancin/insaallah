<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:27 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputrole'])) {
    if (!empty($_POST)) {
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $status = $_POST['status'];
        $period->createrole($nama,$password,$status);
        $success = "Data Berhasil di Tambahkan";

    } else {
        session_start();
        $error = '';

    }
}
header("location:../view/tambahrole.php");
?>