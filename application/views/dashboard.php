<div class="container-fluid"></div>
<div class="row text-center">

    <?php foreach ($barang as $brg) : ?>

        <div class="card mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'. $brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
                <small><?php echo $brg->jenis_kerudung ?></small><br>
                <small><?php echo $brg->warna ?></small><br>
                <span class="badge badge-pill badge-success">Rp. <?php echo $brg->harga ?></span>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <a href="#" class="btn btn-sm btn-success">Detail</a>
            </div>
        </div>

    <?php endforeach; ?>
</div>
</div>