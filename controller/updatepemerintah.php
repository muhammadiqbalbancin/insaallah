<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/8/2018
 * Time: 12:44 AM
 */
    require_once ('../lib/Dbcon.php');
    require_once ('../model/model.php');
        $period = new input();
            if (isset($_POST ['updatepemerintah'])) {
                if (!empty($_POST)) {
                    $idpemerintah = $_POST['idpemerintah'];
                    $table = $_POST['table'];
                    $judul = $_POST['judul'];
                    $namapemerintah = $_POST['namapemerintah'];
                    $nippemerintah = $_POST['nippemerintah'];
                    $jabatanpemerintah = $_POST['jabatanpemerintah'];
                    $period->updatepemerintah($idpemerintah,$table,$judul,$namapemerintah,$nippemerintah,$jabatanpemerintah);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailpemerintah.php");
?>
