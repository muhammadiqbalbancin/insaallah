<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 4:31 PM
 */
require_once ('../../lib/Dbcon.php');
require_once ('../../lib/Dbcon2.php');
error_reporting(0);
session_start();
if (!isset($_SESSION['pk'])){
    header('location:../../admin/index.php');
}
$user = ['user'];
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../asset/css/menu.css">
    <link rel="stylesheet" href="../../asset/bootstrap/css/w3.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/css/bantu1.css">
    <script src="../../asset/js/bantu1.js"></script>
    <script src="../../asset/bootstrap/js/bootstrap.min.js"></script>
    <title>Dashboard Administrator Simpang Kiri</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Simpang Kiri Admin
    </div>

</div>
<div class="sidebar">
    <ul>
        <li><a href="detailpenduduk.php"><i class="fa fa-users"></i><span>Penduduk</span></a></li>
        <li><a href="detailpegawai.php"><i class="fa fa-user-md"></i><span>Pegawai</span></a></li>
        <li><a href="detailberita.php"><i class="fa fa-list-alt"></i><span>Berita</span></a></li>
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Pengaduan</span></a></li>
        <li><a href="../../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="main" style="margin-50%: auto">
    <hr>
    <h4 style="text-align: center;text-decoration: solid">Data Penduduk</h4>
    <hr>
    <div class="row container">
        <div class="col col-md-2">
            <a href="hdetailpenduduk.php"><button class="form-control btn btn-success" value="Lihat Informasi Jumlah" type="button">Lihat Informasi Jumlah</button></a>
        </div>
        <form method="post" action="detailpenduduk.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari">
            </div>
            <div class="col col-md-2">
                <a href="detailpenduduk.php"><button class="form-control btn btn-primary" type="submit" value="carii">Semua data </button></a>
            </div>
        </form>
    </div>
    <hr>
    <?php
        $aa ="SELECT * FROM datapenduduk order by idpenduduk";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
        $orderby = $_GET['orderby'];
        $asc=$_GET['asc'];
        if ($orderby != "" && $asc !=""){
            $aa="SELECT * FROM datapenduduk order by $orderby $asc";
        }
        if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM datapenduduk WHERE namapenduduk like '%$cari%' OR jk like '%$cari%' OR agama like '%$cari%' OR statusperkawinan like '%$cari%' OR pekerjaan like '%$cari%' OR pendidikan like '%$cari%' OR kelurahan like '%$cari%' OR lain like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM datapenduduk";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
            <thead>
            <tr class="table table-primary" style="background-color: #2e6da4">
                <td>No</td>
                <td><a href="detailpenduduk.php?orderby=namapenduduk&asc=<?=$desc?>" >Nama Penduduk</a></td>
                <td><a href="detailpenduduk.php?orderby=jk&asc=<?=$desc?>">Jenis Kelamin</td></td>
                <td><a href="detailpenduduk.php?orderby=agama&asc=<?=$desc?>">Agama</td></td>
                <td><a href="detailpenduduk.php?orderby=statusperkawinan&asc=<?=$desc?>">Status Perkawinan</td></td>
                <td><a href="detailpenduduk.php?orderby=pekerjaan&asc=<?=$desc?>">Pekerjaan</a></td>
                <td><a href="detailpenduduk.php?orderby=pendidikan&asc=<?=$desc?>">Pendidikan</td>
                <td><a href="detailpenduduk.php?orderby=kelurahan&asc=<?=$desc?>">Kelurahan</a></td>
                <td><a href="detailpenduduk.php?orderby=lain&asc=<?=$desc?>">Status Kematian</td></td>
                <td>Detail</td>
            </tr>
            </thead>
            <?php
            $no=1;
            $result = mysqli_query($con, $aa);
            foreach ($result as $data){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $data['namapenduduk'] ?></td>
                    <td><?php echo $data ['jk'] ?></td>
                    <td><?php echo $data['agama']?></td>
                    <td><?php echo $data['statusperkawinan'] ?></td>
                    <td><?php echo $data['pekerjaan'] ?></td>
                    <td><?php echo $data ['pendidikan'] ?></td>
                    <td><?php echo $data['kelurahan'] ?></td>
                    <td><?php echo $data['lain'] ?></td>
                    <td><a href="sdetailpenduduk.php?idpenduduk=<?php echo $data['idpenduduk'];?>" <p style="text-align: center" class="glyphicon glyphicon-list-alt"></p></td>
                </tr>
                </tbody>
                <?php
                $no++;
            }
            ?>
        </table>
</div>
	<script src="../../asset/bootstrap/js/bootstrap.js"></script>
    <script src="../../asset/js/jquery-1.10.2.js"></script>
    <script src="../../asset/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../../asset/plugins/dataTables/jquery.dataTables.js"></script>
</body>
</html>