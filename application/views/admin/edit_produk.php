<div class="container-fluid text-dark mb-5">
	
	<h3 class="text-danger">Edit Data Produk</h3>

	<?php foreach ($etalase as $etl) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/etalase/update_produk' ?>" >

			
								<div class="form-group">
					     			
					     			<label>Gambar</label><br>
					     			<input type="file" name="gambar" class="form-control-file"><?php echo $etl->gambar?>
					     		</div>
					     	
					     		<div class="form-group">
					     			
					     			<label>Nama Barang</label>
					     			<input type="text" name="nama_barang" class="form-control" value="<?php echo $etl->nama_barang ?>">

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Deskripsi</label>
					     			<input type="hidden" name="id_barang" class="form-control" value="<?php echo $etl->id_barang ?>">
					     			<textarea type="text" name="deskripsi" class="form-control" rows="5"><?php echo $etl->deskripsi ?></textarea>

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Kategori</label>
					     			<input type="text" name="kategori" class="form-control" value="<?php echo $etl->kategori ?>">

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Harga</label>
					     			<input type="text" name="harga" class="form-control" value="<?php echo $etl->harga ?>">

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Jumlah Stok</label>
					     			<input type="text" name="jumlah_stok" class="form-control" value="<?php echo $etl->jumlah_stok ?>">

					     		</div>

					     		<button type="submit" class="btn btn-danger">Simpan</button>
			

		</form>

	<?php endforeach; ?>

</div>