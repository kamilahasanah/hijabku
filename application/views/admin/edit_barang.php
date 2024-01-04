<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">

        <div class="for-group">
            <label>ID Barang</label>
            <input type="text" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
        </div>


        <div class="for-group">
            <label>Nama Barang</label>
            <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
        </div>

        <div class="for-group">
            <label>Jenis Kerudung</label>
            <input type="text" name="jenis_kerudung" class="form-control" value="<?php echo $brg->jenis_kerudung ?>">
        </div>

        <div class="for-group">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control" value="<?php echo $brg->warna ?>">
        </div>

        <div class="for-group">
            <label>Ukuran</label>
            <input type="text" name="ukuran" class="form-control" value="<?php echo $brg->ukuran ?>">
        </div>

        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
        </div>

        <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
        </div>

        <div class="for-group">
            <label>Terjual</label>
            <input type="text" name="terjual" class="form-control" value="<?php echo $brg->terjual ?>">
        </div>

        <div class="for-group">
            <label>Gambar</label>
            <input type="text" name="gambar" class="form-control" value="<?php echo $brg->gambar ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm"> Simpan</button>
    </form>

    <?php endforeach; ?>
</div>