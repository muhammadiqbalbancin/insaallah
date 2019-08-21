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
            if (isset($_POST ['updaterole'])) {
                if (!empty($_POST)) {
					$idrole = $_POST['idrole'];
                    $nama = $_POST['nama'];
                    $password = $_POST['password'];
                    $status = $_POST['status'];
                    $period->updaterole($idrole,$nama,$password,$status);
                    $success = "Data Berhasil di Tambahkan";

                }
            }
    header("location:../view/detailrole.php");
?>
