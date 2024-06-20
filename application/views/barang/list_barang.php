<!DOCTYPE html>
<html lang="en">
<body>
    <h2 class="fw-bold text-decoration-underline" align="center">Data Barang</h2>
    <div class="container mt-5">
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <form action="<?php echo site_url('barang/search_barang'); ?>" method="post" class="d-flex">
                <input class="form-control me-2" type="text" name="keyword" placeholder="Cari Nama Barang">
                <button class="btn btn-outline-success me-2" type="submit">Cari</button>
                <button class="btn btn-outline-danger" onclick="window.location.href='<?php echo base_url('barang'); ?>'" type="button">Reset</button>
            </form>
            <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('barang/create_barang'); ?>'">Tambah Barang</button>
        </div>
    </nav>
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kategori Barang</th>
                            <th scope="col">Deskripsi Barang</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Stock Barang</th>
                            <th scope="col">Supplier Barang</th>
                            <th scope="col">Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barang as $brg) { ?>
                            <tr>
                                <td><?php echo $brg['id']; ?></td>
                                <td><?php echo $brg['kode_barang']; ?></td>
                                <td><?php echo $brg['nama_barang']; ?></td>
                                <td><?php echo $brg['kategori_barang']; ?></td>
                                <td><?php echo $brg['deskripsi_barang']; ?></td>
                                <td><?php echo $brg['harga_beli']; ?></td>
                                <td><?php echo $brg['harga_jual']; ?></td>
                                <td><?php echo $brg['stock_barang']; ?></td>
                                <td><?php echo $brg['supplier_barang']; ?></td>
                                <td><?php echo $brg['tanggal_masuk']; ?></td>
                                <td>
                                    <a href="<?php echo site_url('barang/edit_barang/' . $brg['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                <a href="<?php echo site_url('barang/delete_barang/' . $brg['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>