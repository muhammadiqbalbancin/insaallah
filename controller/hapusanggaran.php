<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/7/2018
 * Time: 11:20 PM
 */

require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
    $period= new input();
    $id = $_GET['id'];
        $period->deleteanggaran($id);
        $success = "Data Berhasil di Tambahkan";
header("location:../view/detailanggaran.php");
?>