<div class="container-fluid">
	
	<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>

	<table class="table table-bordered mb-5">
		
		<tr>
			
			<th>No</th>
			<th>Gambar</th>
			<th>Nama Produk</th>
			<th>Deskripsi</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Jumlah Stok</th>
			<th colspan="3">Aksi</th>

		</tr>

		<?php $no=1; foreach ($etalase as $etl) : ?>

				<tr>
					
					<td> <?php  echo $no++ ?> </td>
					<td> <img src="<?php echo base_url().'/uploads/'.$etl->gambar ?>" class="card-img-top"></td>
					<td> <?php  echo $etl->nama_barang  ?> </td>
					<td> <?php  echo $etl->deskripsi  ?> </td>
					<td> <?php  echo $etl->kategori  ?> </td>
					<td> <?php  echo $etl->harga  ?> </td>
					<td> <?php  echo $etl->jumlah_stok  ?> </td>
					<td><button type="button" class="btn btn-sm btn-primary">Edit</button></td>
					<td><button type="button" class="btn btn-sm btn-danger">Hapus</button></td>
					<td><button type="button" class="btn btn-link">Detail</button></td>

				</tr>

		<?php  endforeach; ?>
	</table>

</div>