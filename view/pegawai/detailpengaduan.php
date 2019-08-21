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
    <h4 style="text-align: center;text-decoration: solid">Data Pengaduan</h4>
    <hr>
    <div class="row container">
        <div class="col col-md-2">
            <a href="hdetailpengaduan.php"><button class="form-control btn btn-success" value="Lihat Informasi Jumlah" type="button">Lihat Informasi Jumlah</button></a>
        </div>
        <form method="post" action="detailpengaduan.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari" placeholder="Cari Data Pengaduan">
            </div>
            <div class="col col-md-2">
                <a href="detailpengaduan.php"><button class="form-control btn btn-primary" type="submit" value="carii">Cari Data </button></a>
            </div>
        </form>
    </div>
    <hr>
    <?php
        $aa ="SELECT * FROM datapengaduan order by idpengaduan";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
        $orderby = $_GET['orderby'];
        $asc=$_GET['asc'];
        if ($orderby != "" && $asc !=""){
            $aa="SELECT * FROM datapengaduan order by $orderby $asc";
        }
        if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM datapengaduan WHERE nik like '%$cari%' OR nohp like '%$cari%' OR prioritas like '%$cari%' OR isipg like '%cari%'";
        }
        else{
            $aa="SELECT * FROM datapengaduan";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
            <thead>
            <tr class="table table-primary" style="background-color: #2e6da4">
                <td>No</td>
                <td><a href="detailpengaduan.php?orderby=nik&asc=<?=$desc?>" style="color: black">NIK</a></td>
                <td><a href="detailpengaduan.php?orderby=nohp&asc=<?=$desc?>" style="color: black">NO HP</td></td>
                <td><a href="detailpengaduan.php?orderby=prioritas&asc=<?=$desc?>" style="color: black">Prioritas</td></td>
                <td style="color: black">Isi Pengaduan</td>
                <td style="color: black">Update</td>

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
                    <td><?php echo $data['nik'] ?></td>
                    <td><?php echo $data ['nohp'] ?></td>
                    <td><?php echo $data['prioritas']?></td>
                    <td width="20"><textarea  class="form-active" rows="2" cols="30" maxlength="50" style="border:solid 0px " readonly="readonly"><?php echo $data['isipg'] 
                    ?> </textarea></td>
                    <td> <a href="sdetailpengaduan.php?idpengaduan=<?php echo $data['idpengaduan'];?>" <p style="text-align: center" class="glyphicon glyphicon-edit"></p></a></td>
                    <!--
                     <a href="sdetailpengaduan.php?idpengaduan=<?php echo $data['idpengaduan'];?>" <p style="text-align: left" >lihat lainny</a>


                    <td><p rows="4" cols="50" maxlength="50" ><?php echo $data['isipg'] 
                    ?></p> <a href=""></a></td>-->
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