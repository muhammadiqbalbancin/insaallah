<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:32 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputpenduduk'])) {
    if (!empty($_POST)) {
        $namapenduduk = $_POST['namapenduduk'];
        $tmptlahir = $_POST['tmptlahir'];
        $tgllahir = $_POST['tgllahir'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $statusperkawinan = $_POST['statusperkawinan'];
        $pekerjaan = $_POST['pekerjaan'];
        $pendidikan = $_POST['pendidikan'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $alamat = $_POST['alamat'];
        $kelurahan = $_POST['kelurahan'];
        $lain = $_POST['lain'];
        $nkk = $_POST['nkk'];
        $nik = $_POST['nik'];
        $period->creatependuduk($namapenduduk,$tmptlahir,$tgllahir,$jk,$agama,$statusperkawinan,$pekerjaan,$pendidikan,$kewarganegaraan,$alamat,$kelurahan,$lain,$nkk,$nik);
        $success = "Data Berhasil di Tambahkan";

    }
}
header("location:../view/dashboard.php");
?>
