<?php

require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
$period = new input();
if (isset($_POST ['updateberita'])) {
    if (!empty($_POST)) {
        $idberita = $_POST['idberita'];
        $judulberita = $_POST['judulberita'];
        $isiberita = $_POST['isiberita'];
		$tipe= $_POST['tipe'];
        $eks = array('jpg','png');
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $eksten = strtolower(end($x));
        $size=$_FILES['gambar']['size'];
        $filetemp = $_FILES['gambar']['tmp_name'];
        
        if (in_array($eksten, $eks)==true){
            
            if ($size<1044070){
                move_uploaded_file($filetemp, '../upload/'.$gambar);
                $period->updateberita($idberita,$judulberita,$isiberita,$tipe,$gambar);
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
    header("location:../view/detailberita.php");
?>
