<?= $this->extend('template/penjual'); ?>

<?= $this->section('content');?>

<form action="/penjual/product/update/<?= $produk['id'];?>" method="post">
    <?= csrf_field();?>
        <input type="hidden" name="slug" value="<?= $produk['slug']; ?>">
<div class="mb-3">
    <label for="" class="form-label" autofocus>Nama Produk</label>
    <input
        type="text"
        class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '';?>"
        name="nama"
        id="nama"
        aria-describedby="helpId"
        placeholder=""
        value="<?= (old('nama')) ? old('nama') : $produk['nama'];?>"
    />
    <div class="invalid-feedback">
        <?= $validation->getError('nama');?>
    </div>
    <label for="" class="form-label">Deskripsi</label>
    <input
        type="text"
        class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : '';?>"
        name="deskripsi"
        id="deskripsi"
        aria-describedby="helpId"
        placeholder=""
        value="<?= (old('deskripsi')) ? old('deskripsi') : $produk['deskripsi'];?>"
    />
        <div class="invalid-feedback">
        <?= $validation->getError('deskripsi');?>
    </div>
    <label for="" class="form-label">Harga</label>
    <input
        type="text"
        class="form-control <?= $validation->hasError('harga_asli') ? 'is-invalid' : '';?>"
        name="harga_asli"
        id="harga_asli"
        aria-describedby="helpId"
        placeholder=""
        value="<?= (old('harga_asli')) ? old('harga_asli') : $produk['harga_asli'];?>"
    />
        <div class="invalid-feedback">
        <?= $validation->getError('harga_asli');?>
    </div>
    <label for="" class="form-label">Stok Awal</label>
    <input
        type="text"
        class="form-control <?= $validation->hasError('stok') ? 'is-invalid' : '';?>"
        name="stok"
        id="stok"
        aria-describedby="helpId"
        placeholder=""
        value="<?= (old('stok')) ? old('stok') : $produk['stok'];?>"
    />
        <div class="invalid-feedback">
        <?= $validation->getError('stok');?>
    </div>
    
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection('content');?>