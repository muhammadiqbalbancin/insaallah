<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:30 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['inputberita'])) {
    if (!empty($_POST)) {
        $judulberita = $_POST['judul'];
        $isi = $_POST['isi'];
		$tipe= $_POST['tipe'];
        $tglpublish = $_POST['tglpublish'];
        $eks = array('jpg','png');
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $eksten = strtolower(end($x));
        $size=$_FILES['gambar']['size'];
        $filetemp = $_FILES['gambar']['tmp_name'];
        if (in_array($eksten, $eks)==true){
            if ($size<1044070){
                move_uploaded_file($filetemp, '../upload/'.$gambar);
                $period->createberita($judulberita,$isi,$tipe,$tglpublish,$gambar);
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
header("location:../view/tambahberita.php");