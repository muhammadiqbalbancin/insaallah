<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/21/2017
 * Time: 12:01 AM
 */

require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
    $period= new input();
    $idpenduduk = $_GET['idpenduduk'];
        $period->deletependuduk($idpenduduk);
        $success = "Data Berhasil di Tambahkan";
header("location:../view/dashboard.php");
?>