<?php

require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputpemerintah'])) {
    if (!empty($_POST)) {
        $table = $_POST['table'];
        $judul  = $_POST['judul'];
        $namapemerintah = $_POST['namapemerintah'];
        $nippemerintah = $_POST['nippemerintah'];
        $jabatanpemerintah = $_POST['jabatanpemerintah'];
        $period->createpemerintah($table,$judul,$namapemerintah,$nippemerintah,$jabatanpemerintah);
        $success = "Data Berhasil di Tambahkan";
        }
    } 
header("location:../view/detailpemerintah.php");
?>

