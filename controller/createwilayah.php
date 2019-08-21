<?php
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputwilayah'])) {
    if (!empty($_POST)) {
        $namadesa = $_POST['namadesa'];
        $judul1 = $_POST['judul1'];
        $judul2 = $_POST['judul2'];
        $ketwilayah = $_POST['ketwilayah'];
                $period->createwilayah($namadesa,$judul1,$judul2,$ketwilayah);
        }
    } else {
        session_start();
        $error = '';

    }
header("location:../view/detailwilayah.php");
 ?>
