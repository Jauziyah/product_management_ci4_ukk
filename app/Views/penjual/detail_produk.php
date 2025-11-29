<?= $this->extend('template/penjual');?>


<?= $this->section('content');?>
<div class="card">
    <img class="card-img-top" src="<?= base_url('/uploads/' . $produk['image']);?>" alt="Title" />
    <div class="card-body">
        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>
    </div>
</div>

<?= $this->endSection();?>