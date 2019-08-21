<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 1/8/2018
 * Time: 2:21 AM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['updategambarskpd'])) {
    if (!empty($_POST)) {
        $idgambar = $_POST['idgambar'];
        $eks = array('jpg','png');
        $gambaraja = $_FILES['gambaraja']['name'];
        $x = explode('.',$gambaraja);
        $eksten = strtolower(end($x));
        $size=$_FILES['gambaraja']['size'];
        $filetemp = $_FILES['gambaraja']['tmp_name'];
        if (in_array($eksten, $eks)==true){
            if ($size<1044070){
                move_uploaded_file($filetemp, '../upload/skpd/'.$gambaraja);
                $period->updategambarskpd($idgambar,$gambaraja);
                if ($period){
                    echo 'sukses';
                }
                else{
                    echo 'gagal';
                }
            }else {
                echo 'ekstensi harus jpg atau png';
            }
        }
    } else {
        session_start();
        $error = '';

    }
}
header("location:../view/detailgambarskpd.php");
?>