<?php
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
    $period= new input();
    $idwilayah = $_GET['idwilayah'];
        $period->deletewilayah($idwilayah);
        $success = "Data Berhasil di Tambahkan";
header("location:../view/detailwilayah.php");
 ?>
