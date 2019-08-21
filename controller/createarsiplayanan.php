<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/8/2018
 * Time: 2:17 AM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputarsiplayanan'])) {
    if (!empty($_POST)) {
        $tanggal_upload = $_POST['tanggal_upload'];
        $nama_file = $_POST['nama_file'];
        $urlfile = $_POST['urlfile'];
        $period->createarsiplayanan($tanggal_upload,$nama_file,$urlfile);
        
    } else {
        session_start();
        $error = '';

    }
}
header("location:../view/detailarsiplayanan.php");
?>