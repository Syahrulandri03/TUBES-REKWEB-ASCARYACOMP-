<div class="container-fluid">
  <div class="row">
    
      <?php foreach ($etalase as $etl)  : ?>

        <div class="card" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$etl->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">

                    <h5 class="card-title mb-1"><?php echo $etl->nama_barang ?></h5>
                    <!--  <small>Deskripsi :</small><br><br>
                    <small><?php echo $etl->deskripsi ?></small><br><br> -->
                    <span>Rp <?php echo $etl->harga ?></span><br><br>
                    <button type="button" class="btn btn-primary">Beli</button>
                    <button type="button" class="btn btn-link">Detail</button>


            </div>
            </div>
      <?php endforeach; ?>
  </div>
</div>