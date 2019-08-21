<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/8/2018
 * Time: 1:30 AM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
    $period= new input();
    $idpemerintah = $_GET['idpemerintah'];
        $period->deletepemerintah($idpemerintah);
        $success = "Data Berhasil di Tambahkan";
header("location:../view/detailpemerintah.php");
?>