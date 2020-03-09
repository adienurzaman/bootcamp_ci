<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title; ?></title>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

	<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#tabel_user").DataTable({
				responsive: true
			});
		});
	</script>

</head>
<body>
	<div id="container">
		<div class="container">
			<div id="body">
				<h2><?= $judul; ?></h2>
				<hr/>
				<p>
					<i class="glyphicon glyphicon-user"></i> Data User
				</p>
				<p>
					<a href="<?= base_url('user/tambah'); ?>" class="btn btn-info btn-md">
						<i class="glyphicon glyphicon-plus"></i> Tambah Data
					</a>
				</p>
				<table id="tabel_user" class="table table-bordered table-striped table-hover nowrap" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Level User</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach ($user as $data) {
							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$data->username."</td>";
								echo "<td>".$data->nama."</td>";
								echo "<td>".$data->jk."</td>";
								echo "<td>".$data->alamat."</td>";
								echo "<td>".$data->level_user."</td>";
								echo "<td>
									<a href='".base_url('user/edit/'.$data->id_user)."' class='btn btn-md btn-success'>
										<i class='glyphicon glyphicon-edit'></i> 
										Edit
									</a>
									<a href='".base_url('user/hapus/'.$data->id_user)."' class='btn btn-md btn-danger'>
										<i class='glyphicon glyphicon-trash'></i> 
										Hapus
									</a>
									</td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
	</div>

</body>
</html>