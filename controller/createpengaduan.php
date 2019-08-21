<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:30 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputpengaduan'])) {
    if (!empty($_POST)) {
        $idpengaduan = $_POST['idpengaduan'];
        $nohp= $_POST['nohp'];
        $isipg = $_POST['isipg'];
        $tanggalpengaduan = $_POST['tanggalpengaduan'];
        $period->createpengaduan($idpengaduan,$nohp,$isipg,$tanggalpengaduan);
        $success = "Data Berhasil di Tambahkan";

    } else {
        session_start();
        $error = '';

    }
}
header("location:../mobile/layanan.php");
?>
