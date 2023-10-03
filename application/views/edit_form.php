<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Pegawai_Negeri_Sipil.svg/220px-Pegawai_Negeri_Sipil.svg.png" type="image/gif">
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php');
	?>
	<div class="card-body">
		<form action="<?php base_url("edit") ?>" method="post" enctype="multipart/form-data">
			<div class="card-header text-white bg-secondary">
				<h2>Edit Data User</h2>
			</div>
			<div class="card-body">
				<div class="mb-3 row">
					<label for="nama_indra" class="col-sm-2 col-form-label">Nama User</label>
					<div class="col-sm-10">
						<input class="form-control" <?php echo form_error('nama_indra') ? 'is-invalid' : '' ?>" type="text" name="nama_indra" placeholder="Nomor Pegawai" value="<?php echo $indra->nama_indra ?>" />
					</div>
					<div class="invalid-feedback">
						<?php echo form_error('nama_indra') ?>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="username_indra" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('username_indra') ? 'is-invalid' : '' ?>" type="text" name="username_indra" min="0" placeholder="Nama Pegawai" value="<?php echo $indra->username_indra ?>" />
					</div>
					<div class="invalid-feedback">
						<?php echo form_error('username_indra') ?>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="password_indra" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('password_indra') ? 'is-invalid' : '' ?>" type="text" name="password_indra" min="0" placeholder="Unit" value="<?php echo $indra->password_indra ?>" />
					</div>
					<div class="invalid-feedback">
						<?php echo form_error('password_indra') ?>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="level_indra" class="col-sm-2 col-form-label">Level User</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('level_indra') ? 'is-invalid' : '' ?>" type="text" name="level_indra" min="0" placeholder="Alamat" value="<?php echo $indra->level_indra ?>" />
					</div>
					<div class="invalid-feedback">
						<?php echo form_error('level_indra') ?>
					</div>
				</div>
				<input type=hidden name=id_indra value=<?php echo $indra->id_indra; ?>>

				<input class="btn btn-primary" type="submit" name="btn" value="Save" />
		</form>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>