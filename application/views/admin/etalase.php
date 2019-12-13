<div class="container-fluid">
	
	<button class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>

	<table class="table table-bordered">
		
		<tr>
			
			<th>No</th>
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
					<td> <?php  echo $etl->nama_barang  ?> </td>
					<td> <?php  echo $etl->deskripsi  ?> </td>
					<td> <?php  echo $etl->kategori  ?> </td>
					<td> <?php  echo $etl->harga  ?> </td>
					<td> <?php  echo $etl->jumlah_stok  ?> </td>
					<td><div class="btn btn-succes btn-sm"></div>Edit</td>
					<td><div class="btn btn-succes btn-sm"></div>Hapus</td>
					<button type="button" class="btn btn-link">Detail</button>

				</tr>

		<?php  endforeach; ?>
	</table>

</div>