<?= $this->extend('template/penjual');?>

<?= $this->section('content');;?>
<h1>Product List</h1>

<a href="/penjual/product/tambah" class="btn btn-primary">Tambah produk</a>

<?php if(session()->getFlashdata('pesan')): ?>
    <div
        class="alert alert-primary"
        role="alert"
    >
        <?= session()->getFlashdata('pesan');?>
    </div>
    
<?php endif; ?>

<div
    class="table-responsive"
>
    <table
        class="table"
    >
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Nama</th>
                <th scope="col">harga</th>
                <th scope="col">stok</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;;?>
            <?php foreach($list_produk as $produk): ?>
                <tr>
                    <td><?= $i++;?></td>
                    <td><img src="<?= base_url('uploads/' . $produk['image']);?>" alt="" style="width: 70px;"></td>
                    <td><?= $produk['nama'];?></td>
                    <td><?= $produk['harga_asli'];?></td>
                    <td><?= $produk['stok'];?></td>
                    <td><a href="/penjual/product-<?= $produk['slug'];?>" class="btn btn-primary">Detail</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>


<?= $this->endSection();?>