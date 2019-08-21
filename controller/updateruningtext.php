<?php

    require_once ('../lib/Dbcon.php');
    require_once ('../model/model.php');
        $period = new input();
            if (isset($_POST ['updateruningtext'])) {
                if (!empty($_POST)) {
                    $idruning = $_POST['idruning'];
                    $judul  = $_POST['judul'];
                    $tulisanberita = $_POST['tulisanberita'];
                    $period->updateruningtext ($idruning,$judul,$tulisanberita);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailgambarskpd.php");
?>


