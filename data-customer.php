﻿<?php
include 'layout/header.php';
include 'layout/sidebar.php';
?>
		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">

				<!-- row -->

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Data Customer</h4>

							</div>
							<div class="card-body">
								
								<div class="table-responsive">
									<table class="table table-responsive-md">
										<thead>
											<tr>

												<th><strong>NO.</strong></th>
												<th><strong>NAMA</strong></th>
												<th><strong>Email</strong></th>
												<th><strong>Password</strong></th>
												<th><strong>No HP</strong></th>
												<th><strong>Aksi</strong></th>
											</tr>
										</thead>
										<tbody>
											<?php include 'koneksi.php';
											$sql2   = "SELECT * FROM user WHERE role = 'customer';";
											$q2     = mysqli_query($koneksi, $sql2);
											$urut   = 1;
											while ($r2 = mysqli_fetch_array($q2)) {
												$id         = $r2['id_user'];
												$nama       = $r2['username'];
												$email       = $r2['email'];
												$password     = $r2['password'];
												$nohp     = $r2['no_hp'];


											?>
												<tr>
													<th scope="row"><?php echo $urut++ ?></th>
													<td scope="row"><?php echo $nama ?></td>
													<td scope="row"><?php echo $email ?></td>
													<td scope="row"><?php echo $password ?></td>
													<td scope="row"><?php echo $nohp ?></td>
													<td scope="row">
														<button type="button" class="btn btn-danger mb-2" onclick="hapusmodal('<?= $id ?>')">Hapus</button>
													</td>
												</tr>

											<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Tambah -->
				<div class="modal fade" id="Modaltambahcustomer" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Customer</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form action="controllers/crudcustomer.php" method="post">
									<div class="mb-3 row">
										<label class="form-label">Nama</label>
										<input type="text" class="form-control" placeholder="Masukkan Nama" name="tnama">
									</div>
									<div class="mb-3 row">
										<label class="form-label">Email</label>
										<input type="text" class="form-control" placeholder="Masukkan Email" name="temail">
									</div>
									<div class="mb-3 row">
										<label class="form-label">Password</label>
										<input type="text" class="form-control" placeholder=" Masukkan Password" name="tpassword">
									</div>
									<div class="mb-3 row">
										<label class="form-label">No HP</label>
										<input type="text" class="form-control" placeholder="Masukkan No HP" name="tnohp">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Tambah End -->

				<!-- Modal Edit -->
				<div class="modal fade" id="Modaleditcustomer" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Data Customer</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form action="controllers/crudcustomer.php" method="post">
									<input type="hidden" class="form-control" id="idcustomer" name="tiduser">
									<div class="mb-3 row">
										<label class="form-label">Nama</label>
										<input type="text" class="form-control" id="namacustomer" placeholder="Masukkan Nama" name="tnama">
									</div>
									<div class="mb-3 row">
										<label class="form-label">Email</label>
										<input type="text" class="form-control" placeholder="Masukkan Email" id="emailcustomer" name="temail">
									</div>
									<div class="mb-3 row">
										<label class="form-label">Password</label>
										<input type="text" class="form-control" placeholder=" Masukkan Password" id="passwordcustomer" name="tpassword">
									</div>
									<div class="mb-3 row">
										<label class="form-label">No HP</label>
										<input type="text" class="form-control" placeholder="Masukkan No HP" id="nohpcustomer" name="tnohp">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="edit">Edit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Edit End -->

				<!-- Modal Hapus -->
				<div class="modal fade" id="Modalhapuscustomer" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Hapus Data Customer</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form action="controllers/crudcustomer.php" method="post">
									<input type="hidden" class="form-control" id="idcustomerhapus" name="tiduser">
									<h5 class="text-center"> Apakah Anda yakin akan menghapus data ini?</h5>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="hapus">Hapus</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Hapus End -->

			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->




		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="vendor/owl-carousel/owl.carousel.js"></script>

	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<!-- <script src="js/styleSwitcher.js"></script> -->
	<script>
		function editmodal(id, nama, email, password, nohp) {
			// console.log(id + nama + email + password + nohp);

			$('#idcustomer').val(id);
			$('#namacustomer').val(nama);
			$('#emailcustomer').val(email);
			$('#passwordcustomer').val(password);
			$('#nohpcustomer').val(nohp);

			$('#Modaleditcustomer').modal('show');
		}

		function hapusmodal(id) {
			// console.log(id + nama + email + password + nohp);

			$('#idcustomerhapus').val(id);

			$('#Modalhapuscustomer').modal('show');
		}

		function cardsCenter() {

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 1
					},
					800: {
						items: 1
					},
					991: {
						items: 1
					},
					1200: {
						items: 1
					},
					1600: {
						items: 1
					}
				}
			})
		}

		jQuery(window).on('load', function() {
			setTimeout(function() {
				cardsCenter();
			}, 1000);
		});
	</script>

</body>

</html>