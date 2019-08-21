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
            if (isset($_POST ['updatearsiplayanan'])) {
                if (!empty($_POST)) {
					$id = $_POST['id'];
                    $tanggal_upload = $_POST['tanggal_upload'];
                    $nama_file = $_POST['nama_file'];
                    $urlfile = $_POST['urlfile'];
                    $period->updatearsiplayanan($id,$tanggal_upload,$nama_file,$urlfile);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailarsiplayanan.php");
?>
