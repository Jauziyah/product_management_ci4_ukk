<?= $this->extend('template/penjual'); ?>

<?= $this->section('content'); ?>

<form action="/penjual/product/create" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="mb-3">
        <label for="" class="form-label" autofocus>Nama Produk</label>
        <input
            type="text"
            class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : ''; ?>"
            name="nama"
            id="nama"
            aria-describedby="helpId"
            placeholder=""
            value="<?= old('nama'); ?>" />
        <div class="invalid-feedback">
            <?= $validation->getError('nama'); ?>
        </div>
        <label for="" class="form-label">Deskripsi</label>
        <input
            type="text"
            class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : ''; ?>"
            name="deskripsi"
            id="deskripsi"
            aria-describedby="helpId"
            placeholder=""
            value="<?= old('deskripsi'); ?>" />
        <div class="invalid-feedback">
            <?= $validation->getError('deskripsi'); ?>
        </div>
        <label for="" class="form-label">Harga</label>
        <input
            type="text"
            class="form-control <?= $validation->hasError('harga_asli') ? 'is-invalid' : ''; ?>"
            name="harga_asli"
            id="harga_asli"
            aria-describedby="helpId"
            placeholder=""
            value="<?= old('harga_asli'); ?>" />
        <div class="invalid-feedback">
            <?= $validation->getError('harga_asli'); ?>
        </div>
        <label for="" class="form-label">Stok Awal</label>
        <input
            type="text"
            class="form-control <?= $validation->hasError('stok') ? 'is-invalid' : ''; ?>"
            name="stok"
            id="stok"
            aria-describedby="helpId"
            placeholder="" />
        <div class="invalid-feedback">
            <?= $validation->getError('stok'); ?>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Input Gambar</label>
            <input
                type="file"
                class="form-control <?= $validation->hasError('image') ? 'is-invalid' : ''; ?>"
                name="image"
                id="produk-thumbnail"
                placeholder=""
                aria-describedby="fileHelpId"
                onchange="preview_produk_image()"
                 />
            <div class="invalid-feedback">
                <?= $validation->getError('image'); ?>
            </div>
            <img src="/uploads/product/default_produk.jpg" alt="" class="product-preview">
            <div id="fileHelpId" class="form-text">No big, no strange file</div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Request</button>
</form>

<?= $this->endSection('content'); ?>