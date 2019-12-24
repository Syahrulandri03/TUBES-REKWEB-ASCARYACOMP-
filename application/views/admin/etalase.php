<div class="container-fluid ">
	
		<h3 class="text-center text-dark mb-3"><i class="fas fa-table fa-lg text-danger"></i> Data Produk</h3>

		<button class="btn btn-sm btn-danger mb-3" data-toggle="modal" data-target="#tambahProduk"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>

	 <table class="table table-bordered table-hover mb-5">
		<thead class="thead-dark text-center">
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
		</thead>
			
		<?php $no=1; foreach ($etalase as $etl) : ?>

				<tr class="text-dark">
					
					<td> <?php  echo $no++ ?> </td>
					<td> <img src="<?php echo base_url().'/uploads/'.$etl->gambar ?>" class="card-img-top"></td>
					<td> <?php  echo $etl->nama_barang  ?> </td>
					<td> <?php  echo $etl->deskripsi  ?> </td>
					<td> <?php  echo $etl->kategori  ?> </td>
					<td>Rp <?php  echo number_format($etl->harga, 0, ',', '.') ?> </td>
					<td> <?php  echo $etl->jumlah_stok  ?> </td>
					<td><?php echo anchor('admin/etalase/edit_produk/' . $etl->id_barang, '<button type="button" class="btn btn-sm btn-secondary">Edit</button>') ?></td>
					<td><?php echo anchor('admin/etalase/hapus_produk/' . $etl->id_barang, '<button type="button" class="btn btn-sm btn-danger">Hapus</button>') ?></td>
					<!-- <td><button type="button" class="btn btn-link text-dark">Detail</button></td>
 -->
				</tr>

		<?php  endforeach; ?>
	</table> 
<!-- 
	 <div class="row mb-3">
    
      <?php foreach ($etalase as $etl)  : ?>

        <div class="card ml-3 mb-3" style="width: 16rem;">

          
                <div class="card-body">
                    <span class="badge badge-secondary">New</span>
                    <img src="<?php echo base_url().'/uploads/'.$etl->gambar ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mb-1"><?php echo $etl->nama_barang ?></h5>
                    <small>Deskripsi :</small><br>
                    <small><?php echo $etl->deskripsi ?></small><br><br>
                    <small>Kategori :</small><br>
                    <small><?php echo $etl->kategori ?></small><br><br>
                    <small>Harga :</small><br>
                    <span>Rp <?php echo $etl->harga ?></span><br><br>
                    <button type="button" class="btn btn-sm btn-primary">Edit</button>
                    <td><button type="button" class="btn btn-sm btn-danger">Hapus</button></td>
                    <button type="button" class="btn btn-link">Detail</button>


            </div>
            </div>
      <?php endforeach; ?>
  </div> -->

</div>

<!-- Modal -->
	<div class="modal fade" id="tambahProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable" role="document">
			    <div class="modal-content text-dark">
			      <div class="modal-header">

				        	<h5 class="modal-title text-danger" id="tambahProdukTitle">Tambah Produk</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          	<span aria-hidden="true">&times;</span>

			        </button>
			      </div>
			      <div class="modal-body">

					     <form action="<?php echo base_url(). 'admin/etalase/tambah_produk' ?>" method="post" enctype="multipart/form-data">
					     		
								<div class="form-group">
					     			
					     			<label>Gambar</label><br>
					     			<input type="file" name="gambar" class="form-control-file">

					     		</div>
					     	
					     		<div class="form-group">
					     			
					     			<label>Nama Barang</label>
					     			<input type="text" name="nama_barang" class="form-control">

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Deskripsi</label>
					     			<!-- <input type="text" name="deskripsi" class="form-control"> -->
					     		<textarea type="text" name="deskripsi" class="form-control"></textarea>  

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Kategori</label>
					     			<input type="text" name="kategori" class="form-control">

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Harga</label>
					     			<input type="text" name="harga" class="form-control">

					     		</div>

					     		<div class="form-group">
					     			
					     			<label>Jumlah Stok</label>
					     			<input type="text" name="jumlah_stok" class="form-control">

					     		</div>

					    

			      </div>
			      <div class="modal-footer">

			      			<button type="submit" class="btn btn-secondary">Tambah Produk</button>
			        		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>
			      </form>
		</div>
	  </div>
	</div>

