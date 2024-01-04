<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Jenis Kerudung</th>
            <th>Warna</th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Terjual</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $id = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?php echo $id++ ?></td>
                <td><?php echo $brg->nama_barang ?></td>
                <td><?php echo $brg->jenis_kerudung ?></td>
                <td><?php echo $brg->warna ?></td>
                <td><?php echo $brg->ukuran ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                <td><?php echo $brg->terjual ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_barang, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
               <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_barang,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

            </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT PRODUK</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kerudung</label>
                    <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
                    <input type="text" name="jenis_kerudung" class="form-control" value="<?php echo $brg->jenis_kerudung ?>">
                </div>

                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" value="<?php echo $brg->warna ?>">
                </div>

                <div class="form-group">
                    <label>Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" value="<?php echo $brg->ukuran ?>">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
                </div>

                <div class="form-group">
                    <label>Terjual</label>
                    <input type="text" name="terjual" class="form-control" value="<?php echo $brg->terjual ?>">
                </div>

                <div class="form-group">
                    <label>Gambar Produk</label>
                    <input type="file" name="gambar" class="form-control" value="<?php echo $brg->gambar?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

            </form>
        
        </div>
