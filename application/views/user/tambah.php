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

</head>
<body>
	<div id="container">
		<div class="container">
			<div id="body">
				<h2><?= $judul; ?></h2>
				<hr/>
				<p>
					<i class="glyphicon glyphicon-plus"></i> Tambah Data User
				</p>
				<p>
					<a href="<?= base_url('user'); ?>" class="btn btn-warning btn-md">
						<i class="glyphicon glyphicon-backward"></i> Kembali
					</a>
				</p>
				<hr/>
				<p>
					<form action="<?= base_url('user/simpan'); ?>" method="post">
						<p>
							<label>Username : </label>
							<input type="text" name="username" class="form-control" required="" autocomplete="off">
						</p>
						<p>
							<label>Password : </label>
							<input type="password" name="password" class="form-control" required="">
						</p>
						<p>
							<label>Nama User : </label>
							<input type="text" name="nama" class="form-control" autocomplete="off">
						</p>
						<p>
							<label>Jenis Kelamin : </label>
							<select class="form-control" name="jk">
								<option value="">-- Pilih Jenis Kelamin --</option>
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</p>
						<p>
							<label>Alamat : </label>
							<textarea class="form-control" name="alamat" autocomplete="off"></textarea>
						</p>
						<p>
							<label>Level User : </label>
							<select name="level_user" class="form-control">
								<option value="">-- Pilih Level User --</option>
								<option value="Dosen">Dosen</option>
								<option value="Mahasiswa">Mahasiswa</option>
							</select>
						</p>
						<hr>
						<p>
							<button type="submit" class="btn btn-md btn-success"><i class="glyphicon glyphicon-save"></i> Simpan</button>
							<button type="reset" class="btn btn-md btn-danger"><i class="glyphicon glyphicon-refresh"></i> Reset</button>
						</p>
					</form>
				</p>
			</div>

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
	</div>
</body>
</html>