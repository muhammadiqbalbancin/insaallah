<?php 
/*
*/
require_once ('../lib/Dbcon.php');
require_once ('../model/model.php');
	$period = new input();
	$idpengaduan = $_GET['idpengaduan'];
		$period->deletepengaduan($idpengaduan);
		$success = "Data Berhasil di Hapus";
header("location:../view/detailpengaduan.php");
 ?>