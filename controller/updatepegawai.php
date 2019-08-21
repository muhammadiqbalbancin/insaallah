<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 8:47 PM
 */
    require_once ('../lib/Dbcon.php');
    require_once ('../model/model.php');
        $period = new input();
            if (isset($_POST ['updatepegawai'])) {
                if (!empty($_POST)) {
					$idpegawai = $_POST['idpegawai'];
                    $nip = $_POST['nip'];
                    $namapegawai = $_POST['namapegawai'];
                    $tmptlahir = $_POST['tmptlahir'];
                    $tgllahir = $_POST['tgllahir'];
                    $jabatan = $_POST['jabatan'];
                    $golongan = $_POST['golongan'];
                    $aktivasi = $_POST['aktivasi'];
                    $status = $_POST['status'];
                    $period->updatepegawai($idpegawai,$nip,$namapegawai,$tmptlahir,$tgllahir,$jabatan,$golongan,$aktivasi,$status);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailpegawai.php");
?>
