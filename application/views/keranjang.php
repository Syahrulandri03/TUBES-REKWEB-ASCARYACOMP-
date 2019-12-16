<div class="container_fluid">
	
			<h4>Keranjang Pesanan</h4>

		<table class="table table-bordered table-striped table-hover">
			
				<tr>

					<th>No</th>
					<th>Nama Produk</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Total</th>

				</tr>

					<?php $no=1; foreach($this->cart->contents() as $produk) : ?>

							<tr>
								
								<td><?php echo $no++ ?></td>
								<td><?php echo $produk['name'] ?></td>
								<td><?php echo $produk['qty'] ?></td>
								<td><?php echo $produk['price'] ?></td>
								<td><?php echo $produk['subtotal'] ?></td>

							</tr>

					<?php endforeach; ?>

		</table>

</div>