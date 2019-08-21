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
            if (isset($_POST ['inputanakyatim'])) {
                if (!empty($_POST)) {
                    $nama = $_POST['nama'];
                    $tempatlahir = $_POST['tempatlahir'];
                    $tgllahir = $_POST['tgllahir'];
                    $jk = $_POST['jk'];
                    $alamat = $_POST['alamat'];
                    $status = $_POST['status'];
                    $period->createanakyatim($nama,$tempatlahir,$tgllahir,$jk,$alamat,$status);
                    $success = "Data Berhasil di Tambahkan";

                } else {
                    session_start();
                    $error = '';

                }
            }
            header("location:../view/tambahanakyatim.php");
?>