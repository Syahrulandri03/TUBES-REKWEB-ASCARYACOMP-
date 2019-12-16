<div class="container_fluid ml-3 mr-3">
	
			<h3 class="text-center text-dark mb-3"><i class="fas fa-shopping-cart fa-lg text-danger"></i> Keranjang Pesanan</h3>

		<table class="table table-bordered table-striped table-hover text-dark">
			
				<tr class="text-center">

					<th>No</th>
					<th>Nama Produk</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Total</th>

				</tr>

					<?php $no=1; foreach($this->cart->contents() as $produk) : ?>

							<tr>
								
								<td class="text-center"><?php echo $no++ ?></td>
								<td><?php echo $produk['name'] ?></td>
								<td class="text-center"><?php echo $produk['qty'] ?></td>
								<td class="text-center">Rp <?php echo number_format($produk['price'], 0, ',', '.') ?></td>
								<td class="text-center">Rp <?php echo number_format($produk['subtotal'], 0, ',', '.') ?></td>

							</tr>

					<?php endforeach; ?>


					<tr class="text-center">
							<td colspan="4">TOTAL : </td>
							<td>Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
					</tr>

		</table>

</div>