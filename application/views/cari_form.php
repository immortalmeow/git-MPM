<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Pegawai_Negeri_Sipil.svg/220px-Pegawai_Negeri_Sipil.svg.png" type="image/gif">
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="card-body">
		<div class="card-header text-white bg-secondary">
			<h1>Cari User</h1>
		</div>
		<h1>Tuliskan kata kunci yang ingin di cari</h1>
		<form action="" method="get" style="flex-direction: row; align-items:center">
			<label for="Cari" class="col-sm-2 col-form-label">Kata Kunci: Nama, username, Level</label>
			<div class="col-sm-10">
				<input type="search" name="keyword" style="width: 360px;" placeholder="monyari apasih" value="<?= html_escape($keyword) ?>" required maxlength="32" />
			</div>

			<div class="col-12">
				<input type="submit" class="btn btn-primary" value="Cari">
			</div>
		</form>

		<?php if ($search_result) : ?>
			<div class="search-result">
				<table class="table">
					<tr>
						<th scope="col">Nama User</th>
						<th scope="col">Username</th>
						<th scope="col">Password</th>
						<th scope="col">Level User</th>
						<th scope="col">Action</th>
					</tr>
					<?php foreach ($search_result as $indra) : ?>
						<tr>
							<td scope="row">
								<?php echo $indra->nama_indra ?>
							</td>
							<td scope="row">
								<?php echo $indra->username_indra ?>
							</td>
							<td scope="row">
								<?php echo md5("$indra->password_indra") ?>
							</td>
							<td scope="row">
								<?php echo $indra->level_indra ?>
							</td>
							<td scope="row">
								<a href=edit/<?php echo $indra->id_indra ?>><button type="button" class="btn btn-warning">Edit</button></a>
								<a href=delete/<?php echo $indra->id_indra ?> onclick="return confirm('Apakah anda yakin ingin menghapus <?php echo $indra->nama_indra  ?>?')"><button type="button" class="btn btn-danger">Hapus</button></a>
							</td>
						</tr>
					<?php endforeach; ?>
			</div>
		<?php else : ?>
			<?php if ($keyword) : ?>
				<div style="height: 400px;">
					<h1>Tidak ada yang ditemukan</h1>
					<p>Coba dengan kata kunci yang lain</p>
				</div>
			<?php endif ?>
		<?php endif ?>
	</div>
	<style type="text/css">
		*,
		html,
		body {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			scroll-behavior: smooth;
		}
	</style>
</body>

</html>