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
	<?php if ($this->session->flashdata('success')) : ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>
	<div class="card-body">
		<div class="card-header text-white bg-secondary">
			<h2>Masukkan Data User</h2>
		</div>
		<div class="card-body">
			<form action="<?php base_url('add') ?>" method="post">
				<div class="mb-3 row">
					<label for="nama_indra" class="col-sm-2 col-form-label">Nama User</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('nama_indra') ? 'is-invalid' : '' ?>" type="numeric" name="nama_indra" placeholder="Nama User" />
					</div>
				</div>
				<div class="invalid-feedback">
					<?php echo form_error('nama_indra') ?>
				</div>


				<div class="mb-3 row">
					<label for="username_indra" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('username_indra') ? 'is-invalid' : '' ?>" type="text" name="username_indra" placeholder="Username User" />
					</div>
				</div>
				<div class="invalid-feedback">
					<?php echo form_error('username_indra') ?>
				</div>


				<div class="mb-3 row">
					<label for="password_indra" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('password_indra') ? 'is-invalid' : '' ?>" type="text" name="password_indra" min="0" placeholder="Password" />
					</div>
				</div>
				<div class="invalid-feedback">
					<?php echo form_error('password_indra') ?>
				</div>

				<div class="mb-3 row">
					<label for="level_indra" class="col-sm-2 col-form-label">Level User</label>
					<div class="col-sm-10">
						<input class="form-control <?php echo form_error('level_indra') ? 'is-invalid' : '' ?>" type="text" name="level_indra" min="0" placeholder="Level" />
					</div>
				</div>
				<div class="invalid-feedback">
					<?php echo form_error('level_indra') ?>
				</div>
				<div class="col-12">
					<input type="submit" name="btn" value="Save" class="btn btn-outline-primary" />
				</div>
			</form>
		</div>


		<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>