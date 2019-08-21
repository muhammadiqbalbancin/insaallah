<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rundeng</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Font Awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style1.css">
		<style media="screen">
			.h{
				text-align:right;
			}
		</style>
	</head>

	<body>

		<section id="newsletter">
			<div class="container">
				<div class="col-md-12">
					<h1><span class="orange">Data</span> Wilayah</h1>
				</div>
			</div>
		</section>

		<section id="wdesaPertama">
				<div class="col-md-12 col-sm-12">
					<div id="wdesa1">
						<div class="panel-group" id="accordion">
							<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa"><span class="warna1Header">Badar</a>
									</h4>
								</div>
								<div id="desa" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="slide_pertama">
											<h3>Selamat Datang di Badar</h3>
												<p>
													<b>Badar</b>adalah salah satu kampong yang ada di kecamatan Rundeng, kota Subulussalam,
													provinsi Aceh, Indonesia, kode pos 24782. Desa ini memiliki jumlah penduduk yang sebagian besar berdarah Aceh.
													Hasil pertanian utama di desa ini adalah padi, jagung, kakao, dan kelapa.
												</p>
												<br>
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
                                                                        require_once ('../lib/Dbcon2.php');
                                                                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Badar'";
                                                                        $hasil=mysqli_query($con,$q);
                                                                        $hasil2= $hasil->fetch_assoc()?>
                                                                        <?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
                                                                        require_once ('../lib/Dbcon.php');
                                                                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Badar'";
                                                                        $hasil=mysqli_query($con,$q);
                                                                        $hasil2= $hasil->fetch_assoc()?>
                                                                        <?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
                                                                        require_once ('../lib/Dbcon2.php');
                                                                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Badar'";
                                                                        $hasil=mysqli_query($con,$q);
                                                                        $hasil2= $hasil->fetch_assoc()?>
                                                                        <?= $hasil2['jklk'];?></td>
																</tr>
                                                                										<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Badar'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Badar'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
													</div>
													<br>

													<section class="section-map">
														<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20badar%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
													</section>

										</div>
									</div>
								</div>
							</div>


	<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa2"><span class="warna1Header">Binanga</span></a>
									</h4>
								</div>
								<div id="desa2" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="slide_kedua">
											<h3>Selamat Datang di Binanga</h3>
												<p>
													<b>Binanga</b> adalah salah satu kampong yang ada di kecamatan Rundeng, kota Subulussalam,
													provinsi Aceh, Indonesia, kode pos 24782.
												</p>
												<br>

												<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
                                                                        require_once ('../lib/Dbcon2.php');
                                                                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Binanga'";
                                                                        $hasil=mysqli_query($con,$q);
                                                                        $hasil2= $hasil->fetch_assoc()?>
                                                                        <?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
                                                                        require_once ('../lib/Dbcon.php');
                                                                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Binanga'";
                                                                        $hasil=mysqli_query($con,$q);
                                                                        $hasil2= $hasil->fetch_assoc()?>
                                                                        <?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
                                                                        require_once ('../lib/Dbcon2.php');
                                                                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Binanga'";
                                                                        $hasil=mysqli_query($con,$q);
                                                                        $hasil2= $hasil->fetch_assoc()?>
                                                                        <?= $hasil2['jklk'];?></td>
																</tr>
																				<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Binanga'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Binanga'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
													</div>								<br>
												<section class="section-map">
													<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20binanga%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
												</section>

										</div>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa3"><span class="warna1Header">Blukur/Belukur Makmur</span></a>
									</h4>
								</div>
								<div id="desa3" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="slide_ketiga">
											<h3>Selamat Datang di Desa Blukur/Belukur Makmur</h3>
												<p>
													<b>Blukur/Belukur Makmur</b> adalah desa yang berada di kecamatan Rundeng,
													kota Subulussalam, Aceh, Indonesia.
												</p>
												<br>

												<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
													<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Blukur/Belukur Makmur'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Blukur/Belukur Makmur'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Blukur/Belukur Makmur'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																		<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Blukur/Belukur Makmur'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Blukur/Belukur Makmur'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
												</div>
												<br>

												<section class="section-map">
													<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20belukur%20makmur%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
												</section>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
						</div>

		</section>

		<section id="wdesaKedua">
				<div class="col-md-12 col-sm-12">
					<div id="wdesa1">
						<div class="panel-group" id="accordion">
							<div class="panel">
								<div class="panel-heading warna2">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa4"><span class="warna2Header">Dah</span></a>
									</h4>
								</div>
								<div id="desa4" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Dah</h3>
											<p>
												<b>Dah</b> merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
													<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Dah'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Dah'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Dah'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																			<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Dah'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Dah'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>

															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20dah%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna2">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa5"><span class="warna2Header">Geruguh</span></a>
									</h4>
								</div>
								<div id="desa5" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Geruguh</h3>
											<p>
												<b>Geruguh</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama di desa ini adalah jagung, kakao, kelapa, dan padi.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
																	<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Geruguh'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Geruguh'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Geruguh'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																	<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Geruguh'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Geruguh'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20geruguh%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna2">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa6"><span class="warna2Header">Harapan Baru</span></a>
									</h4>
								</div>
								<div id="desa6" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Harapan Baru</h3>
											<p>
												<b>Harapan Baru</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama adalah padi, jagung, kakao, dan kelapa.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
												<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Harapan Baru'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Harapan Baru'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Harapan Baru'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																				<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Harapan Baru'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Harapan Baru'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20harapan%20baru%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section id="wdesaKetiga">
				<div class="col-md-12 col-sm-12">
					<div id="wdesa3">
						<div class="panel-group" id="accordion">
							<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa7"><span class="warna1Header">Kuala Kepeng</span></a>
									</h4>
								</div>
								<div id="desa7" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Kuala Kepeng</h3>
											<p>
												<b>Kuala Kepeng</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama yang dihasilkan di desa ini adalah
												padi, jagung, kakao, dan kelapa.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
														<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Kuala Kepeng'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Kuala Kepeng'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Kuala Kepeng'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																				<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Kuala Kepeng'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Kuala Kepeng'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=kecamatan%20rundeng&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa8"><span class="warna1Header">Kuta Beringin</span></a>
									</h4>
								</div>
								<div id="desa8" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di DesaKuta Beringinm</h3>
											<p>
												<b>Kuta Beringin</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama yang di hasilkan oleh desa ini adalah
												padi, jagung, kakao, kelapa, dan sawit.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
														<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Kuta Beringin'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Kuta Beringin'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Kuta Beringin'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																				<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Kuta Beringin'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Kuta Beringin'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20kuta%20beringin%20kecamatan%20rundeng&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa9"><span class="warna1Header">Lae Mate</span></a>
									</h4>
								</div>
								<div id="desa9" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Lae Mate</h3>
											<p>
												<b>Lae Mate</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama yang dihasilkan oleh desa ini adalah
												padi, jagung, kelapa, dan kakao.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Lae Mate'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Lae Mate'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Lae Mate'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																			<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Lae Mate'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Lae Mate'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20lae%20mate%20kecamatan%20rundeng&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
		</section>

		<section id="wdesaKeempat">
				<div class="col-md-12 col-sm-12">
					<div id="wdesa2">
						<div class="panel-group" id="accordion">
							<div class="panel">
								<div class="panel-heading warna2">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa10"><span class="warna2Header">Lae Pamualan</span></a>
									</h4>
								</div>
								<div id="desa10" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Lae Pamualan</h3>
											<p>
												<b>Lae Pamualan</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama yang dihasilkan oleh desa ini adalah
												jagung, kakao, padi, dan kelapa.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
														<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Lae Pamualan'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Lae Pamualan'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Lae Pamualan'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																						<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Lae Pamualan'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Lae Pamualan'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20lae%20pamualan%20kecamatan%20rundeng&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna2">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa11"><span class="warna2Header">Mandilam</span></a>
									</h4>
								</div>
								<div id="desa11" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Mandilam</h3>
											<p>
												<b>Mandilam</b>  merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
														<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Mandilam'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Mandilam'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Mandilam'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																					<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Mandilam'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Mandilam'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20mandilam%20kecamatan%20rundeng&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

							<div class="panel">
								<div class="panel-heading warna2">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa12"><span class="warna2Header">Muara Batu-Batu</span></a>
									</h4>
								</div>
								<div id="desa12" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Muara Batu-Batu</h3>
											<p>
												<b>Muara Batu-Batu</b> merupakan salah satu satu kampong yang ada di
												kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
												kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
												kakao, dan kelapa.
											</p>
											<br>

											<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
														<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Muara Batu-Batu'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Muara Batu-Batu'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon2.php');
																																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Muara Batu-Batu'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['jklk'];?></td>
																</tr>
																		<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Muara Batu-Batu'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td>
																</tr>
																<tr>
																	<td>Belum Kawin</td>
																	<td class="h"><?php
																																				require_once ('../lib/Dbcon.php');
																																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Muara Batu-Batu'";
																																				$hasil=mysqli_query($con,$q);
																																				$hasil2= $hasil->fetch_assoc()?>
																																				<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
											</div>
											<br>

											<section class="section-map">
												<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20muara%20batu-batu%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
											</section>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
		</section>


</div>
						<section id="wdesaKelima">
							<div class="col-md-12 col-sm-12">
								<div id="wdesa1">
									<div class="panel-group" id="accordion">
										<div class="panel">
											<div class="panel-heading warna1">
												<h4>
													<a data-toggle="collapse" data-parent="#accordion" href="#desa13"><span class="warna1Header">Oboh</span></a>
												</h4>
											</div>
											<div id="desa13" class="panel-collapse collapse">
												<div class="panel-body">
													<h3>Selamat Datang di Desa Oboh</h3>
													<p>
														<b>Oboh</b> merupakan salah satu satu kampong yang ada di
														kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
														kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
														kakao, dan kelapa dan sawit.
													</p>
													<br>

													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																	require_once ('../lib/Dbcon2.php');
																	$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Oboh'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																	require_once ('../lib/Dbcon.php');
																	$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Oboh'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																		require_once ('../lib/Dbcon2.php');
																		$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Oboh'";
																		$hasil=mysqli_query($con,$q);
																		$hasil2= $hasil->fetch_assoc()?>
																		<?= $hasil2['jklk'];?></td>
																	</tr>
																	<tr>
																		<td>Sudah Kawin</td>
																		<td class="h"><?php
																			require_once ('../lib/Dbcon.php');
																			$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Oboh'";
																			$hasil=mysqli_query($con,$q);
																			$hasil2= $hasil->fetch_assoc()?>
																			<?= $hasil2['a'];?></td>
																		</tr>
																		<tr>
																			<td>Belum Kawin</td>
																			<td class="h"><?php
																				require_once ('../lib/Dbcon.php');
																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Oboh'";
																				$hasil=mysqli_query($con,$q);
																				$hasil2= $hasil->fetch_assoc()?>
																				<?= $hasil2['a'];?></td></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<br>

																<section class="section-map">
																	<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Oboh%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
																</section>

															</div>
														</div>
													</div>

													<div class="panel">
														<div class="panel-heading warna1">
															<h4>
																<a data-toggle="collapse" data-parent="#accordion" href="#desa14"><span class="warna1Header">Panglima Saman</span></a>
															</h4>
														</div>
														<div id="desa14" class="panel-collapse collapse">
															<div class="panel-body">
																<h3>Selamat Datang di Desa Panglima Saman</h3>
																<p>
																	<b>Panglima Saman</b> merupakan salah satu satu kampong yang ada di
																	kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
																	kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
																	kakao, dan kelapa dan sawit.
																</p>
																<br>

																<div class="table-responsive">
																	<table class="table">
																		<thead>
																			<tr class="info">
																				<th>Point</th>
																				<th>Nilai</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Jumlah Penduduk</td>
																				<td class="h"><?php
																				require_once ('../lib/Dbcon2.php');
																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Panglima Saman'";
																				$hasil=mysqli_query($con,$q);
																				$hasil2= $hasil->fetch_assoc()?>
																				<?= $hasil2['jklk'];?></td>
																			</tr>
																			<tr>
																				<td>Jumlah Laki - laki</td>
																				<td class="h"><?php
																				require_once ('../lib/Dbcon.php');
																				$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Panglima Saman'";
																				$hasil=mysqli_query($con,$q);
																				$hasil2= $hasil->fetch_assoc()?>
																				<?= $hasil2['jklk'];?></td>
																			</tr>
																			<tr>
																				<td>Jumlah Perempuan</td>
																				<td class="h"><?php
																					require_once ('../lib/Dbcon2.php');
																					$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Panglima Saman'";
																					$hasil=mysqli_query($con,$q);
																					$hasil2= $hasil->fetch_assoc()?>
																					<?= $hasil2['jklk'];?></td>
																				</tr>
																				<tr>
																					<td>Sudah Kawin</td>
																					<td class="h"><?php
																						require_once ('../lib/Dbcon.php');
																						$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Panglima Saman'";
																						$hasil=mysqli_query($con,$q);
																						$hasil2= $hasil->fetch_assoc()?>
																						<?= $hasil2['a'];?></td>
																					</tr>
																					<tr>
																						<td>Belum Kawin</td>
																						<td class="h"><?php
																							require_once ('../lib/Dbcon.php');
																							$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Panglima Saman'";
																							$hasil=mysqli_query($con,$q);
																							$hasil2= $hasil->fetch_assoc()?>
																							<?= $hasil2['a'];?></td></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<br>

																			<section class="section-map">
																				<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Panglima%20Saman%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
																			</section>

																		</div>
																	</div>
																</div>

														<div class="panel">
															<div class="panel-heading warna1">
																<h4>
																	<a data-toggle="collapse" data-parent="#accordion" href="#desa15"><span class="warna1Header">Pasar Rundeng</span></a>
																</h4>
															</div>
															<div id="desa15" class="panel-collapse collapse">
																<div class="panel-body">
																	<h3>Selamat Datang di Desa Pasar Rundeng</h3>
																	<p>
																		<b>Pasar Rundeng</b> merupakan salah satu satu kampong yang ada di
																		kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
																		kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
																		kakao, dan kelapa dan sawit.
																	</p>
																	<br>

																	<div class="table-responsive">
																		<table class="table">
																			<thead>
																				<tr class="info">
																					<th>Point</th>
																					<th>Nilai</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>Jumlah Penduduk</td>
																					<td class="h"><?php
																					require_once ('../lib/Dbcon2.php');
																					$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Pasar Rundeng'";
																					$hasil=mysqli_query($con,$q);
																					$hasil2= $hasil->fetch_assoc()?>
																					<?= $hasil2['jklk'];?></td>
																				</tr>
																				<tr>
																					<td>Jumlah Laki - laki</td>
																					<td class="h"><?php
																					require_once ('../lib/Dbcon.php');
																					$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Pasar Rundeng'";
																					$hasil=mysqli_query($con,$q);
																					$hasil2= $hasil->fetch_assoc()?>
																					<?= $hasil2['jklk'];?></td>
																				</tr>
																				<tr>
																					<td>Jumlah Perempuan</td>
																					<td class="h"><?php
																						require_once ('../lib/Dbcon2.php');
																						$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Pasar Rundeng'";
																						$hasil=mysqli_query($con,$q);
																						$hasil2= $hasil->fetch_assoc()?>
																						<?= $hasil2['jklk'];?></td>
																					</tr>
																					<tr>
																						<td>Sudah Kawin</td>
																						<td class="h"><?php
																							require_once ('../lib/Dbcon.php');
																							$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Pasar Rundeng'";
																							$hasil=mysqli_query($con,$q);
																							$hasil2= $hasil->fetch_assoc()?>
																							<?= $hasil2['a'];?></td>
																						</tr>
																						<tr>
																							<td>Belum Kawin</td>
																							<td class="h"><?php
																								require_once ('../lib/Dbcon.php');
																								$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Pasar Rundeng'";
																								$hasil=mysqli_query($con,$q);
																								$hasil2= $hasil->fetch_assoc()?>
																								<?= $hasil2['a'];?></td></td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<br>

																				<section class="section-map">
																					<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20pasar%20rundengn%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
																				</section>

																			</div>
																		</div>
																	</div>
							</div>
					</div>
				</div>
		</section>


<section id="wdesaKelima">
	<div class="col-md-12 col-sm-12">
		<div id="wdesa1">
			<div class="panel-group" id="accordion">
				<div class="panel">
					<div class="panel-heading warna2">
						<h4>
							<a data-toggle="collapse" data-parent="#accordion" href="#desa16"><span class="warna2Header">Sepadan</span></a>
						</h4>
					</div>
					<div id="desa16" class="panel-collapse collapse">
						<div class="panel-body">
							<h3>Selamat Datang di Desa Sepadan</h3>
							<p>
								<b>Sepadan</b> merupakan salah satu satu kampong yang ada di
								kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
								kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
								kakao, dan kelapa dan sawit.
							</p>
							<br>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr class="info">
											<th>Point</th>
											<th>Nilai</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Jumlah Penduduk</td>
											<td class="h"><?php
											require_once ('../lib/Dbcon2.php');
											$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Sepadan'";
											$hasil=mysqli_query($con,$q);
											$hasil2= $hasil->fetch_assoc()?>
											<?= $hasil2['jklk'];?></td>
										</tr>
										<tr>
											<td>Jumlah Laki - laki</td>
											<td class="h"><?php
											require_once ('../lib/Dbcon.php');
											$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Sepadan'";
											$hasil=mysqli_query($con,$q);
											$hasil2= $hasil->fetch_assoc()?>
											<?= $hasil2['jklk'];?></td>
										</tr>
										<tr>
											<td>Jumlah Perempuan</td>
											<td class="h"><?php
												require_once ('../lib/Dbcon2.php');
												$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Sepadan'";
												$hasil=mysqli_query($con,$q);
												$hasil2= $hasil->fetch_assoc()?>
												<?= $hasil2['jklk'];?></td>
											</tr>
											<tr>
												<td>Sudah Kawin</td>
												<td class="h"><?php
													require_once ('../lib/Dbcon.php');
													$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Sepadan'";
													$hasil=mysqli_query($con,$q);
													$hasil2= $hasil->fetch_assoc()?>
													<?= $hasil2['a'];?></td>
												</tr>
												<tr>
													<td>Belum Kawin</td>
													<td class="h"><?php
														require_once ('../lib/Dbcon.php');
														$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Sepadan'";
														$hasil=mysqli_query($con,$q);
														$hasil2= $hasil->fetch_assoc()?>
														<?= $hasil2['a'];?></td></td>
													</tr>
												</tbody>
											</table>
										</div>
										<br>

										<section class="section-map">
											<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20sepadan%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
										</section>

									</div>
								</div>
							</div>

									<div class="panel">
										<div class="panel-heading warna2">
											<h4>
												<a data-toggle="collapse" data-parent="#accordion" href="#desa17"><span class="warna2Header">Sibuasan</span></a>
											</h4>
										</div>
										<div id="desa17" class="panel-collapse collapse">
											<div class="panel-body">
												<h3>Selamat Datang di Desa Sibuasan</h3>
												<p>
													<b>Sibuasan</b> merupakan salah satu satu kampong yang ada di
													kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
													kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
													kakao, dan kelapa dan sawit.
												</p>
												<br>

												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr class="info">
																<th>Point</th>
																<th>Nilai</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Jumlah Penduduk</td>
																<td class="h"><?php
																require_once ('../lib/Dbcon2.php');
																$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Sibuasan'";
																$hasil=mysqli_query($con,$q);
																$hasil2= $hasil->fetch_assoc()?>
																<?= $hasil2['jklk'];?></td>
															</tr>
															<tr>
																<td>Jumlah Laki - laki</td>
																<td class="h"><?php
																require_once ('../lib/Dbcon.php');
																$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Sibuasan'";
																$hasil=mysqli_query($con,$q);
																$hasil2= $hasil->fetch_assoc()?>
																<?= $hasil2['jklk'];?></td>
															</tr>
															<tr>
																<td>Jumlah Perempuan</td>
																<td class="h"><?php
																	require_once ('../lib/Dbcon2.php');
																	$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Sibuasan'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																		require_once ('../lib/Dbcon.php');
																		$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Sibuasan'";
																		$hasil=mysqli_query($con,$q);
																		$hasil2= $hasil->fetch_assoc()?>
																		<?= $hasil2['a'];?></td>
																	</tr>
																	<tr>
																		<td>Belum Kawin</td>
																		<td class="h"><?php
																			require_once ('../lib/Dbcon.php');
																			$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Sibuasan'";
																			$hasil=mysqli_query($con,$q);
																			$hasil2= $hasil->fetch_assoc()?>
																			<?= $hasil2['a'];?></td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<br>

															<section class="section-map">
																<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20sibuasan%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
															</section>

														</div>
													</div>
												</div>

														<div class="panel">
															<div class="panel-heading warna2">
																<h4>
																	<a data-toggle="collapse" data-parent="#accordion" href="#desa18"><span class="warna2Header">Sibungke</span></a>
																</h4>
															</div>
															<div id="desa18" class="panel-collapse collapse">
																<div class="panel-body">
																	<h3>Selamat Datang di Desa Sibungke</h3>
																	<p>
																		<b>Sibungke</b> merupakan salah satu satu kampong yang ada di
																		kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
																		kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
																		kakao, dan kelapa dan sawit.
																	</p>
																	<br>

																	<div class="table-responsive">
																		<table class="table">
																			<thead>
																				<tr class="info">
																					<th>Point</th>
																					<th>Nilai</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>Jumlah Penduduk</td>
																					<td class="h"><?php
																					require_once ('../lib/Dbcon2.php');
																					$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Sibungke'";
																					$hasil=mysqli_query($con,$q);
																					$hasil2= $hasil->fetch_assoc()?>
																					<?= $hasil2['jklk'];?></td>
																				</tr>
																				<tr>
																					<td>Jumlah Laki - laki</td>
																					<td class="h"><?php
																					require_once ('../lib/Dbcon.php');
																					$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Sibungke'";
																					$hasil=mysqli_query($con,$q);
																					$hasil2= $hasil->fetch_assoc()?>
																					<?= $hasil2['jklk'];?></td>
																				</tr>
																				<tr>
																					<td>Jumlah Perempuan</td>
																					<td class="h"><?php
																						require_once ('../lib/Dbcon2.php');
																						$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Sibungke'";
																						$hasil=mysqli_query($con,$q);
																						$hasil2= $hasil->fetch_assoc()?>
																						<?= $hasil2['jklk'];?></td>
																					</tr>
																					<tr>
																						<td>Sudah Kawin</td>
																						<td class="h"><?php
																							require_once ('../lib/Dbcon.php');
																							$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Sibungke'";
																							$hasil=mysqli_query($con,$q);
																							$hasil2= $hasil->fetch_assoc()?>
																							<?= $hasil2['a'];?></td>
																						</tr>
																						<tr>
																							<td>Belum Kawin</td>
																							<td class="h"><?php
																								require_once ('../lib/Dbcon.php');
																								$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Sibungke'";
																								$hasil=mysqli_query($con,$q);
																								$hasil2= $hasil->fetch_assoc()?>
																								<?= $hasil2['a'];?></td></td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<br>

																				<section class="section-map">
																					<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20sibungke%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
																				</section>

																			</div>
																		</div>
																	</div>
</div>
</div>
</div>
</section>


<section id="wdesaKelima">
	<div class="col-md-12 col-sm-12">
		<div id="wdesa1">
			<div class="panel-group" id="accordion">
				<div class="panel">
					<div class="panel-heading warna1">
						<h4>
							<a data-toggle="collapse" data-parent="#accordion" href="#desa19"><span class="warna1Header">Siperkas</span></a>
						</h4>
					</div>
					<div id="desa19" class="panel-collapse collapse">
						<div class="panel-body">
							<h3>Selamat Datang di Desa Siperkas</h3>
							<p>
								<b>Siperkas</b> merupakan salah satu satu kampong yang ada di
								kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
								kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
								kakao, dan kelapa dan sawit.
							</p>
							<br>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr class="info">
											<th>Point</th>
											<th>Nilai</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Jumlah Penduduk</td>
											<td class="h"><?php
											require_once ('../lib/Dbcon2.php');
											$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Siperkas'";
											$hasil=mysqli_query($con,$q);
											$hasil2= $hasil->fetch_assoc()?>
											<?= $hasil2['jklk'];?></td>
										</tr>
										<tr>
											<td>Jumlah Laki - laki</td>
											<td class="h"><?php
											require_once ('../lib/Dbcon.php');
											$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Siperkas'";
											$hasil=mysqli_query($con,$q);
											$hasil2= $hasil->fetch_assoc()?>
											<?= $hasil2['jklk'];?></td>
										</tr>
										<tr>
											<td>Jumlah Perempuan</td>
											<td class="h"><?php
												require_once ('../lib/Dbcon2.php');
												$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Siperkas'";
												$hasil=mysqli_query($con,$q);
												$hasil2= $hasil->fetch_assoc()?>
												<?= $hasil2['jklk'];?></td>
											</tr>
											<tr>
												<td>Sudah Kawin</td>
												<td class="h"><?php
													require_once ('../lib/Dbcon.php');
													$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Siperkas'";
													$hasil=mysqli_query($con,$q);
													$hasil2= $hasil->fetch_assoc()?>
													<?= $hasil2['a'];?></td>
												</tr>
												<tr>
													<td>Belum Kawin</td>
													<td class="h"><?php
														require_once ('../lib/Dbcon.php');
														$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Siperkas'";
														$hasil=mysqli_query($con,$q);
														$hasil2= $hasil->fetch_assoc()?>
														<?= $hasil2['a'];?></td></td>
													</tr>
												</tbody>
											</table>
										</div>
										<br>

										<section class="section-map">
											<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20siperkas%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
										</section>

									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-heading warna1">
									<h4>
										<a data-toggle="collapse" data-parent="#accordion" href="#desa20"><span class="warna1Header">Suaq/Suak Jampak</span></a>
									</h4>
								</div>
								<div id="desa20" class="panel-collapse collapse">
									<div class="panel-body">
										<h3>Selamat Datang di Desa Suaq/Suak Jampak</h3>
										<p>
											<b>Suaq/Suak Jampak</b> merupakan salah satu satu kampong yang ada di
											kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
											kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
											kakao, dan kelapa dan sawit.
										</p>
										<br>

										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr class="info">
														<th>Point</th>
														<th>Nilai</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Jumlah Penduduk</td>
														<td class="h"><?php
														require_once ('../lib/Dbcon2.php');
														$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Suaq/Suak Jampak'";
														$hasil=mysqli_query($con,$q);
														$hasil2= $hasil->fetch_assoc()?>
														<?= $hasil2['jklk'];?></td>
													</tr>
													<tr>
														<td>Jumlah Laki - laki</td>
														<td class="h"><?php
														require_once ('../lib/Dbcon.php');
														$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Suaq/Suak Jampak'";
														$hasil=mysqli_query($con,$q);
														$hasil2= $hasil->fetch_assoc()?>
														<?= $hasil2['jklk'];?></td>
													</tr>
													<tr>
														<td>Jumlah Perempuan</td>
														<td class="h"><?php
															require_once ('../lib/Dbcon2.php');
															$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Suaq/Suak Jampak'";
															$hasil=mysqli_query($con,$q);
															$hasil2= $hasil->fetch_assoc()?>
															<?= $hasil2['jklk'];?></td>
														</tr>
														<tr>
															<td>Sudah Kawin</td>
															<td class="h"><?php
																require_once ('../lib/Dbcon.php');
																$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Suaq/Suak Jampak'";
																$hasil=mysqli_query($con,$q);
																$hasil2= $hasil->fetch_assoc()?>
																<?= $hasil2['a'];?></td>
															</tr>
															<tr>
																<td>Belum Kawin</td>
																<td class="h"><?php
																	require_once ('../lib/Dbcon.php');
																	$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Suaq/Suak Jampak'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['a'];?></td></td>
																</tr>
															</tbody>
														</table>
													</div>
													<br>

													<section class="section-map">
														<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Suaq%2FSuak%20Jampak%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
													</section>

												</div>
											</div>
										</div>
										<div class="panel">
											<div class="panel-heading warna1">
												<h4>
													<a data-toggle="collapse" data-parent="#accordion" href="#desa21"><span class="warna1Header">Tanah Tumbuh</span></a>
												</h4>
											</div>
											<div id="desa21" class="panel-collapse collapse">
												<div class="panel-body">
													<h3>Selamat Datang di Desa Tanah Tumbuh</h3>
													<p>
														<b>Tanah Tumbuh</b> merupakan salah satu satu kampong yang ada di
														kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
														kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
														kakao, dan kelapa dan sawit.
													</p>
													<br>

													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr class="info">
																	<th>Point</th>
																	<th>Nilai</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Jumlah Penduduk</td>
																	<td class="h"><?php
																	require_once ('../lib/Dbcon2.php');
																	$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Tanah Tumbuh'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Laki - laki</td>
																	<td class="h"><?php
																	require_once ('../lib/Dbcon.php');
																	$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Tanah Tumbuh'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Jumlah Perempuan</td>
																	<td class="h"><?php
																		require_once ('../lib/Dbcon2.php');
																		$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Tanah Tumbuh'";
																		$hasil=mysqli_query($con,$q);
																		$hasil2= $hasil->fetch_assoc()?>
																		<?= $hasil2['jklk'];?></td>
																	</tr>
																	<tr>
																		<td>Sudah Kawin</td>
																		<td class="h"><?php
																			require_once ('../lib/Dbcon.php');
																			$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Tanah Tumbuh'";
																			$hasil=mysqli_query($con,$q);
																			$hasil2= $hasil->fetch_assoc()?>
																			<?= $hasil2['a'];?></td>
																		</tr>
																		<tr>
																			<td>Belum Kawin</td>
																			<td class="h"><?php
																				require_once ('../lib/Dbcon.php');
																				$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Tanah Tumbuh'";
																				$hasil=mysqli_query($con,$q);
																				$hasil2= $hasil->fetch_assoc()?>
																				<?= $hasil2['a'];?></td></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<br>

																<section class="section-map">
																	<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Tanah%20Tumbuh%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
																</section>

															</div>
														</div>
													</div>
</div>
</div>
</div>
</section>

<section id="wdesaKelima">
	<div class="col-md-12 col-sm-12">
		<div id="wdesa1">
			<div class="panel-group" id="accordion">
				<div class="panel">
					<div class="panel-heading warna2">
						<h4>
							<a data-toggle="collapse" data-parent="#accordion" href="#desa22"><span class="warna2Header">Teladan Baru</span></a>
						</h4>
					</div>
					<div id="desa22" class="panel-collapse collapse">
						<div class="panel-body">
							<h3>Selamat Datang di Desa Teladan Baru</h3>
							<p>
								<b>Teladan Baru</b> merupakan salah satu satu kampong yang ada di
								kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
								kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
								kakao, dan kelapa dan sawit.
							</p>
							<br>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr class="info">
											<th>Point</th>
											<th>Nilai</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Jumlah Penduduk</td>
											<td class="h"><?php
											require_once ('../lib/Dbcon2.php');
											$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Teladan Baru'";
											$hasil=mysqli_query($con,$q);
											$hasil2= $hasil->fetch_assoc()?>
											<?= $hasil2['jklk'];?></td>
										</tr>
										<tr>
											<td>Jumlah Laki - laki</td>
											<td class="h"><?php
											require_once ('../lib/Dbcon.php');
											$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Teladan Baru'";
											$hasil=mysqli_query($con,$q);
											$hasil2= $hasil->fetch_assoc()?>
											<?= $hasil2['jklk'];?></td>
										</tr>
										<tr>
											<td>Jumlah Perempuan</td>
											<td class="h"><?php
												require_once ('../lib/Dbcon2.php');
												$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Teladan Baru'";
												$hasil=mysqli_query($con,$q);
												$hasil2= $hasil->fetch_assoc()?>
												<?= $hasil2['jklk'];?></td>
											</tr>
											<tr>
												<td>Sudah Kawin</td>
												<td class="h"><?php
													require_once ('../lib/Dbcon.php');
													$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Teladan Baru'";
													$hasil=mysqli_query($con,$q);
													$hasil2= $hasil->fetch_assoc()?>
													<?= $hasil2['a'];?></td>
												</tr>
												<tr>
													<td>Belum Kawin</td>
													<td class="h"><?php
														require_once ('../lib/Dbcon.php');
														$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Teladan Baru'";
														$hasil=mysqli_query($con,$q);
														$hasil2= $hasil->fetch_assoc()?>
														<?= $hasil2['a'];?></td></td>
													</tr>
												</tbody>
											</table>
										</div>
										<br>

										<section class="section-map">
											<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Teladan%20baru%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
										</section>

									</div>
								</div>
							</div>

									<div class="panel">
										<div class="panel-heading warna2">
											<h4>
												<a data-toggle="collapse" data-parent="#accordion" href="#desa23"><span class="warna2Header">Tualang</span></a>
											</h4>
										</div>
										<div id="desa23" class="panel-collapse collapse">
											<div class="panel-body">
												<h3>Selamat Datang di Desa Tualang</h3>
												<p>
													<b>Tualang</b> merupakan salah satu satu kampong yang ada di
													kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
													kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
													kakao, dan kelapa dan sawit.
												</p>
												<br>

												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr class="info">
																<th>Point</th>
																<th>Nilai</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Jumlah Penduduk</td>
																<td class="h"><?php
																require_once ('../lib/Dbcon2.php');
																$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Tualang'";
																$hasil=mysqli_query($con,$q);
																$hasil2= $hasil->fetch_assoc()?>
																<?= $hasil2['jklk'];?></td>
															</tr>
															<tr>
																<td>Jumlah Laki - laki</td>
																<td class="h"><?php
																require_once ('../lib/Dbcon.php');
																$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Tualang'";
																$hasil=mysqli_query($con,$q);
																$hasil2= $hasil->fetch_assoc()?>
																<?= $hasil2['jklk'];?></td>
															</tr>
															<tr>
																<td>Jumlah Perempuan</td>
																<td class="h"><?php
																	require_once ('../lib/Dbcon2.php');
																	$q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Tualang'";
																	$hasil=mysqli_query($con,$q);
																	$hasil2= $hasil->fetch_assoc()?>
																	<?= $hasil2['jklk'];?></td>
																</tr>
																<tr>
																	<td>Sudah Kawin</td>
																	<td class="h"><?php
																		require_once ('../lib/Dbcon.php');
																		$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Tualang'";
																		$hasil=mysqli_query($con,$q);
																		$hasil2= $hasil->fetch_assoc()?>
																		<?= $hasil2['a'];?></td>
																	</tr>
																	<tr>
																		<td>Belum Kawin</td>
																		<td class="h"><?php
																			require_once ('../lib/Dbcon.php');
																			$q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Tualang'";
																			$hasil=mysqli_query($con,$q);
																			$hasil2= $hasil->fetch_assoc()?>
																			<?= $hasil2['a'];?></td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<br>

															<section class="section-map">
																<iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Tualang%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
															</section>

														</div>
													</div>
												</div>
</div>
</div>
</div>
</section>


		<br>
		<br>
	</body>
</html>
