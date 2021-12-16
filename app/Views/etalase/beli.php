<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
	$id_barang = [
		'name' => 'id_barang',
		'id' => 'id_barang',
		'value' => $model->id,
		'type' => 'hidden'
	];

	$id_pembeli = [
		'name' => 'id_pembeli',
		'id' => 'id_pembeli',
		'value' => session()->get('id'),
		'type' => 'hidden'
	];
	$jumlah = [
		'name' => 'jumlah',
		'id' => 'jumlah',
		'value' => 1,
		'min' => 1,
		'class' => 'form-control',
		'type' => 'number',
		'max' => $model->stok,
	];
	$total_harga = [
		'name' => 'total_harga',
		'id' => 'total_harga',
		'value' => null,
		'class' => 'form-control',
	];
	
	$alamat = [
		'name' => 'alamat',
		'id' => 'alamat',
		'class' => 'form-control',
		'value' => null,
	];

	$submit = [
		'name' => 'submit',
		'id' => 'submit',
		'type' => 'submit',
		'value' => 'Beli',
		'class' => 'btn btn-success',
	];
?>

<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-body">
					<img class="img-fluid" src="<?= base_url('uploads/'.$model->gambar) ?>" />
					<h1 class="text-success"><?= $model->nama ?></h1>
					<h4> Harga : <?= $model->harga ?></h4>
					<h4> Stok : <?= $model->stok ?></h4>
				</div>
			</div>
		</div>
		<div class="col-6">
        
			<?= form_open('Etalase/beli') ?>
				<?= form_input($id_barang) ?>
				<?= form_input($id_pembeli) ?>
				<div class="form-group">
					<?= form_label('Jumlah Pembelian', 'jumlah') ?>
					<?= form_input($jumlah) ?>
				</div>
				
				<div class="form-group">
					<?= form_label('Total Harga', 'total_harga') ?>
					<?= form_input($total_harga) ?>
				</div>
				<div class="form-group">
					<?= form_label('Alamat', 'alamat') ?>
					<?= form_input($alamat) ?>
				</div>
				<div class="text-right">
					<?= form_submit($submit) ?>
				</div>
			<?= form_close() ?>
		</div>
	</div>
	<div class="row mb-3 mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							<h4>Komentar</h4>
						</div>
						<div class="col-md-6 text-right">
							<a href="<?= site_url('Komentar/create/'.$model->id) ?>" class="btn btn-link">Tinggalkan Komentar</a>
						</div>
					</div>
				</div>
				<div class="card-body">
				<div class="row">
						<div class="col-md-12">
							<?php foreach($komentar as $k): ?>
								<?php
									$modelUser = new \App\Models\UserModel();
									$namaUser = $modelUser->find($k->id_user)->username;
								?>
								<strong><?= $namaUser ?></strong>
								<br>
								<?= $k->komentar ?>
								<hr>
							<?php endforeach ?>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>





