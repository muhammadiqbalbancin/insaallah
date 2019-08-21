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
    $idberita = $_GET['idberita'];
        $period->deleteberita($idberita);
        $success = "Data Berhasil di Dihapus";
header("location:../view/detailberita.php");
?>