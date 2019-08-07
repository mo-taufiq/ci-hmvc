<div class="container">
	<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');  ?>" >
	</div>
 	<?php if ($this->session->flashdata()): ?>
	<!-- <div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Mahasiswa!<strong> Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div> -->
	<?php endif ?>

<div class="row mt-3">
	<div class="col-md-6">
		<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary" >Tambah Mahasiswa</a>
	</div>
</div>

<div class="row mt-3">
	<div class="col-md-6">
		<form action="" method="post">
			<div class="input-group mb-1">
			  <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword">
			  <div class="input-group-append">
			    <button class="btn btn-primary" type="submit">Cari</button>
			  </div>
			</div>
		</form>
	</div>
</div>

	<div class="row">
		<div class="col-md-6">
			<h3><?php echo $judul; ?></h3>
			<?php if (empty($mahasiswa)) : ?>
				<div class="alert alert-danger" role="alert">
				 Data Mahasiswa Tidak Ditemukan
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs) : ?>
			  <li class="list-group-item">
			  	<?php echo $mhs['nama']; ?>
			  	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
			  	<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right">ubah</a>
			  	<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
			  </li>

			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>