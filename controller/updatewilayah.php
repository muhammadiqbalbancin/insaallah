<?php
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
    $period = new input();
        if (isset($_POST ['updatewilayah'])) {
            if (!empty($_POST)) {
                $idwilayah = $_POST['idwilayah'];
                $namadesa = $_POST['namadesa'];
                $judul1 = $_POST['judul1'];
                $judul2 = $_POST['judul2'];
                $ketwilayah = $_POST['ketwilayah'];
                $period->updatewilayah($idwilayah,$namadesa,$judul1,$judul2,$ketwilayah);
                $success = "Data Berhasil di Tambahkan";

            }
        }
header("location:../view/detailwilayah.php");
?>
