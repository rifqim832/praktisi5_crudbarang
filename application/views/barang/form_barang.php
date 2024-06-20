<div class="card border border-primary">
    <div class="card-header bg-primary text-white">
        <?php echo isset($barang) ? 'Edit Barang' : 'Tambah Barang'; ?>
    </div>
    <div class="card-body">
        <form action="<?php echo isset($barang) ? site_url('barang/edit_barang/' . $barang['id']) : site_url('barang/create_barang'); ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo isset($barang) ? $barang['kode_barang'] : set_value('kode_barang'); ?>">
                        <?php echo form_error('kode_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo isset($barang) ? $barang['nama_barang'] : set_value('nama_barang'); ?>">
                        <?php echo form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="kategori_barang">Kategori Barang</label>
                        <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="<?php echo isset($barang) ? $barang['kategori_barang'] : set_value('kategori_barang'); ?>">
                        <?php echo form_error('kategori_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="<?php echo isset($barang) ? $barang['harga_beli'] : set_value('harga_beli'); ?>">
                        <?php echo form_error('harga_beli', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo isset($barang) ? $barang['harga_jual'] : set_value('harga_jual'); ?>">
                        <?php echo form_error('harga_jual', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="stok_barang">Stock Barang</label>
                        <input type="number" class="form-control" id="stock_barang" name="stock_barang" value="<?php echo isset($barang) ? $barang['stock_barang'] : set_value('stock_barang'); ?>">
                        <?php echo form_error('stock_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="supplier_barang">Supplier Barang</label>
                        <input type="text" class="form-control" id="supplier_barang" name="supplier_barang" value="<?php echo isset($barang) ? $barang['supplier_barang'] : set_value('supplier_barang'); ?>">
                        <?php echo form_error('supplier_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="deskripsi_barang">Deskripsi Barang</label>
                        <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" rows="3"><?php echo isset($barang) ? $barang['deskripsi_barang'] : set_value('deskripsi_barang'); ?></textarea>
                        <?php echo form_error('deskripsi_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="<?php echo isset($barang) ? $barang['tanggal_masuk'] : set_value('tanggal_masuk'); ?>">
                        <?php echo form_error('tanggal_masuk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="w-100 btn btn-primary"><?php echo isset($barang) ? 'Update' : 'Simpan'; ?></button><br>
                <a href="<?php echo site_url('barang'); ?>" class="btn w-100 btn-danger mt-3">Batal</a>
            </div>
        </form>
    </div>
</div>
