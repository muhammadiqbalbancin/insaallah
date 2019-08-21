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
            if (isset($_POST ['updateanakyatim'])) {
                if (!empty($_POST)) {
					$idanakyatim = $_POST['idanakyatim'];
                    $nama = $_POST['nama'];
                    $tempatlahir = $_POST['tempatlahir'];
                    $tgllahir = $_POST['tgllahir'];
                    $jk = $_POST['jk'];
                    $alamat = $_POST['alamat'];
                    $status = $_POST['status'];
                    $period->updateanakyatim($idanakyatim,$nama,$tempatlahir,$tgllahir,$jk,$alamat,$status);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailanakyatim.php");
?>
