<?php
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/w3.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/bantu1.css">
    <script src="../asset/js/bantu1.js"></script>
    <script src="../asset/bootstrap/js/bootstrap.min.js"></script>
    <title>Dashboard Administrator Rantau Gedang</title>
    <style media="screen">

    #div {
      
      width: 100%;
      height: 400px;
        <?php
            $berita ="SELECT * FROM gambarskpd order by idgambar DESC";
            $baca = mysqli_query($con,$berita);
            foreach ($baca as $isi){
        ?>        
      background-image: url('../upload/skpd/<?php echo $isi['gambaraja'] ?>');
              <?php
            }
              ?>      
      background-size: 100% 100%;
      border: ;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 5px;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    tr:hover th,
    tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			transition: all .2s;
		}
    </style>
</head>

<body>
<div>
        <?php
            $berita ="SELECT * FROM runingtext order by idruning DESC";
            $baca = mysqli_query($con,$berita);
            foreach ($baca as $isi){
        ?>         
      <h4 style="text-align: center;text-decoration: solid;"><b><marquee scrolldelay=""><?php echo $isi['tulisanberita'] ?></marquee></b></br></h4>
        <?php
            }
        ?>    
    <div class="col col-sm-12 col-xs-12 col-md-12">
      
      <div class="" id="div">

</div>


<h4 style="text-align: center;text-decoration: solid;"><b>
            <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT judul as  a FROM pemerintah where tabel='Table 1'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
            ?>
                    </b></h4>
        <table class="table-responsive">
            <tr style="background-color:#508abb;">
                <th>Nama</th>
                <th>Jabatan</th>
                <?php
                    $berita ="SELECT * FROM pemerintah where tabel='Table 1' order by idpemerintah ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            </tr>
            <tr>
              <td width="45%" style="font-size:14px;" ><?php echo $isi['namapemerintah'] ?>
              <td style="font-size:14px;text-align:center"><?php echo $isi['jabatanpemerintah'] ?></td>
            </tr>
                <?php
                    }
                ?>    


        </table>
        
        <br><br>
        <p style="text-align: center">&copy; 2019</p>
    </div>
</div>
</body>
</html>
