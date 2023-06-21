<!-- Content wrapper -->
<div class="content-wrapper">

	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">

		<div class="row">
			<div class="col-lg-12 mb-4 order-0">
				<div class="card">
					<div class="d-flex align-items-end row">
						<div class="col-sm-12">
						<div class="card-body text-center">
    <h5 class="card-title text-primary">Selamat Datang di Aplikasi E - Mudharabah</h5>
    <p class="mb-4">Aplikasi <span class="fw-bold">E-Mudharabah</span> adalah sebuah aplikasi yang dirancang untuk memudahkan pengelolaan dan monitoring transaksi mudharabah dalam konteks keuangan dan bisnis. Mudharabah adalah suatu bentuk kerjasama antara pihak yang menyediakan modal (shahibul maal) dan pihak yang mengelola modal (mudharib), di mana keuntungan dibagi berdasarkan kesepakatan sebelumnya.</p><p class="mb-4">Aplikasi E-Mudharabah menyediakan fitur yang komprehensif untuk membantu pengguna dalam melaksanakan transaksi mudharabah. Beberapa fitur utama yang disediakan oleh aplikasi ini antara lain:</p>

<p class="mb-4">- Manajemen Akun: Aplikasi E-Mudharabah memungkinkan pengguna untuk membuat dan mengelola akun pengguna. Pengguna dapat mendaftar sebagai shahibul maal atau mudharib, serta mengatur preferensi akun mereka.</p>

<p class="mb-4">- Pencatatan Transaksi: Aplikasi ini memungkinkan pengguna untuk mencatat transaksi mudharabah yang dilakukan, termasuk jumlah modal yang disediakan, hasil keuntungan, dan pembagian keuntungan antara shahibul maal dan mudharib. Pencatatan transaksi ini membantu pengguna dalam memantau dan melacak kinerja bisnis serta perolehan keuntungan.</p>

<p class="mb-4">- Laporan Keuangan: Aplikasi E-Mudharabah menyediakan laporan keuangan yang terperinci, termasuk laporan laba rugi dan neraca keuangan. Laporan ini memberikan informasi yang berguna bagi pengguna untuk menganalisis kinerja bisnis mereka.</p>

<p class="mb-4">- Notifikasi dan Pengingat: Aplikasi ini juga dilengkapi dengan fitur notifikasi dan pengingat yang membantu pengguna untuk mengelola jadwal pembagian keuntungan, jatuh tempo pembayaran, dan pengingat lainnya terkait transaksi mudharabah.</p>

<p class="mb-4">- Keamanan Data: E-Mudharabah menjaga keamanan data pengguna dengan menerapkan protokol keamanan yang ketat. Informasi dan data transaksi dienkripsi dan disimpan dengan aman, sehingga hanya dapat diakses oleh pengguna yang berwenang.</p>

<p class="mb-0">Aplikasi E-Mudharabah dirancang untuk memberikan kemudahan, kecepatan, dan transparansi dalam pengelolaan transaksi mudharabah. Dengan fitur-fitur yang lengkap, aplikasi ini membantu pengguna untuk mengoptimalkan potensi keuntungan bisnis dan mempermudah pengambilan keputusan berdasarkan data keuangan yang akurat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / Content -->


	<!-- chart JS -->
	<!-- <div>

		<head>
			<title>Chart</title>
			<script type="text/javascript" src="<?=$this->config->item('js').'chart.js';?>"></script>
		</head>

		<div>
			<style type="text/css">
				body {
					font-family: roboto;
				}
			</style>

			<div style="width: 500px;height: 500px">
				<canvas id="myChart"></canvas>
			</div>

			<script>
				var ctx = document.getElementById("myChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ["Perencanaan", "Pemanfaatan", "Pengendalian"],
						datasets: [{
							label: '# Perencanaan',
							data: [12, 19, 3, 23, 2, 3],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								}
							}]
						}
					}
				});
			</script>
		</div>
	</div>
	<!-- End chart -->


	<!-- chart -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">
			<canvas id="myChart"></canvas>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script type="text/javascript">
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: [ <
						? php
						if (count($graph) > 0) {
							foreach($graph as $data) {
								echo "'".$data - > provinsi.
								"',";
							}
						} ?
						>
					],
					datasets: [{
						label: 'Jumlah Penduduk',
						backgroundColor: '#ADD8E6',
						borderColor: '##93C3D2',
						data: [ <
							? php
							if (count($graph) > 0) {
								foreach($graph as $data) {
									echo $data - > jumlah.
									", ";
								}
							} ?
							>
						]
					}]
				},
			});
		</script> 
		<!-- /chart -->


		<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
