<?= $this->extend('template/penjual');; ?>

<?= $this->section('content'); ?>

<h1>Produk</h1>

<?php 
$i = 1;
?>

    <div
        class="table-responsive"
    >
        <table
            class="table"
            style="width: fit-content;"
        >
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($list_produk as $produk): ?>

                <tr>
                        <td><?= $i++;?></td>
                        <td><img style="width: 100px;" src="<?= base_url('/uploads/' . $produk['image']);?>" alt=""></td>
                        <td><?= $produk['nama'];?></td>
                        <td><?= $produk['created_at'];?></td>
                        <td><?= $produk['updated_at'];?></td>
                        <td><a href="/detail/<?= $produk['slug'];?>" class="btn btn-primary">Detail</a></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?= $this->endSection();; ?>