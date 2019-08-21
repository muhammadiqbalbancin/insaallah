<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 12/23/2017
 * Time: 1:37 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../asset/css/menu.css">
        <link rel="stylesheet" href="../asset/bootstrap/css/w3.css">
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/slideshowcss.css">
        <link rel="stylesheet" href="../asset/css/bantu1.css">
        <link rel="stylesheet" href="css/style1.css">
        <style type="text/css">

        </style>
        <script src="../asset/js/bantu1.js"></script>
        <script src="../css/slidedshowjs.js"></script>
        <script src="../asset/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            
        </script>
        <title>Dashboard Administrator Ketapang Indah</title>

  </head>
  <body>
   <section id="newsletter">	
			<div class="container">
				<div class="col-md-12">
					<h4>Berita Desa Ketapang Indah</h4>
				</div>
			</div>
		</section>
		<br>
		<br>
		<br>
		
		<section id="isi1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-xs-12 col-md-12">
						<table class="table-responsive" border="1px;" width="75%" >
        <?php
            $berita ="SELECT * FROM databerita order by idberita DESC";
            $baca = mysqli_query($con,$berita);
            foreach ($baca as $isi){
        ?>
              <tr width="">
                <td style="" width=""><?php echo "<img src='../upload/".$isi['gambar']."' width='100%' height='%'>";?></td>
              </tr>
              <tr>
                <td width="" height=""><h3 style="text-align: center;"><b><?php echo $isi['judulberita'] ?></b></h3>
                <p style="font-size: xx-small; text-align: right;width:"><?php echo $isi['tglpublish']?></p></td>
              </tr>
              <tr>
                <td style="" width=""><t><p style="font-family: Verdana; text-align: justify"   > <?php echo $isi['isiberita'] ?></p></td>
              </tr>
              <?php
            }
              ?>

            </table>
          </div>
    </div>
			</div>
		</section>    
  </body>
</html>
