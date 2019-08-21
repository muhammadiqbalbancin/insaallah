<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/7/2018
 * Time: 10:49 PM
 */
    require_once ('../lib/Dbcon.php');
    require_once ('../model/model.php');
        $period = new input();
            if (isset($_POST ['updateanggaran'])) {
                if (!empty($_POST)) {
                    $id = $_POST['id'];
                    $tableno = $_POST['tableno'];
                    $jenis = $_POST['jenis'];
                    $nama = $_POST['nama'];
                    $anggaran = $_POST['anggaran'];
                    $period->updateanggaran($id,$tableno,$jenis,$nama,$anggaran);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailanggaran.php");
?>
