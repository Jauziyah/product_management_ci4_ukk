<?= $this->extend('template/penjual'); ?>

<?= $this->section('content');?>

<form action="/penjual/product/create" method="post">
    <?= csrf_field();?>
<div class="mb-3">
    <label for="" class="form-label" autofocus>Nama Produk</label>
    <input
        type="text"
        class="form-control"
        name="nama"
        id="nama"
        aria-describedby="helpId"
        placeholder=""
    />
    <label for="" class="form-label">Deskripsi</label>
    <input
        type="text"
        class="form-control"
        name="deskripsi"
        id="deskripsi"
        aria-describedby="helpId"
        placeholder=""
    />
    <label for="" class="form-label">Harga</label>
    <input
        type="text"
        class="form-control"
        name="harga_asli"
        id="harga_asli"
        aria-describedby="helpId"
        placeholder=""
    />
    <label for="" class="form-label">Stok Awal</label>
    <input
        type="text"
        class="form-control"
        name="stok"
        id="stok"
        aria-describedby="helpId"
        placeholder=""
    />
    <label for="" class="form-label">Image</label>
    <input
        type="text"
        class="form-control"
        name="image"
        id="image"
        aria-describedby="helpId"
        placeholder=""
    />
</div>
<button type="submit" class="btn btn-primary">Request</button>
</form>

<?= $this->endSection('content');?>