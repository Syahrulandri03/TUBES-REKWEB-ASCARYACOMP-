<div class="container-fluid">

    <div id="carouselExampleSlidesOnly" class="carousel slide mb-4" data-ride="carousel">
    <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/ascaryacomSlider.jpg')  ?>" class="d-block w-100" alt="...">
            </div>
    </div>
  </div>


  <div class="row">
    
      <?php foreach ($etalase as $etl)  : ?>

        <div class="card border-danger ml-3 mb-3" style="width: 16rem;">
          
                <div class="card-body text-dark">
                    <span class="badge">New In Box</span>
                    <img src="<?php echo base_url().'/uploads/'.$etl->gambar ?>" class="card-img-top mb-3" alt="...">
                    <h6 class="card-title mb-1"><?php echo $etl->nama_barang ?></h6><br>
                    <!--  <small>Deskripsi :</small><br><br>
                    <small><?php echo $etl->deskripsi ?></small><br><br> -->
                    <span class="text-danger">Rp <?php echo $etl->harga ?></span><br><br>
                    <?php echo anchor('dashboard/keranjang/'. $etl->id_barang, '<button type="button" class="btn btn-danger">Beli</button>') ?>
                    <button type="button" class="btn btn-link text-dark">Detail</button>


            </div>
            </div>
      <?php endforeach; ?>
  </div>
</div>