<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:22 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
require_once ('../lib/Dbcon2.php');
    $period = new input();
            if (isset($_POST ['inputpegawai'])) {
                if (!empty($_POST)) {
                    $nip = $_POST['nip'];
                    $namapegawai = $_POST['namapegawai'];
                    $tmptlahir = $_POST['tmptlahir'];
                    $tgllahir = $_POST['tgllahir'];
                    $jabatan = $_POST['jabatan'];
                    $golongan = $_POST['golongan'];
                    $aktivasi = $_POST['aktivasi'];
                    $status = $_POST['status'];
                    $period->createpegawai($nip,$namapegawai,$tmptlahir,$tgllahir,$jabatan,$golongan,$aktivasi,$status);
                    $success = "Data Berhasil di Tambahkan";

                } else {
                    session_start();
                    $error = '';

                }
            }
            header("location:../view/tambahpegawai.php");
?>