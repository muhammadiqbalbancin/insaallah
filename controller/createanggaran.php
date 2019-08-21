<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/7/2018
 * Time: 10:44 PM
 */

require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputanggaran'])) {
    if (!empty($_POST)) {
        $tableno = $_POST['tableno'];
        $jenis = $_POST['jenis'];
        $nama = $_POST['nama'];
        $anggaran = $_POST['anggaran'];
        $period->createanggaran($tableno,$jenis,$nama,$anggaran);
        $success = "Data Berhasil di Tambahkan";
    }
}
header("location:../view/detailanggaran.php");
?>
