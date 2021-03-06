<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('barang')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Data </h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Barang Dev's Store</h3>
            </div>
            <div class="card-body">
                <?php
                    $nama = [
                        'name' => 'nama',
                        'id' => 'nama',
                        'value' => $barang->nama,
                        'class' => 'form-control',
                    ];

                    $harga =[
                        'name' => 'harga',
                        'id' => 'harga',
                        'value' => $barang->harga,
                        'class' => 'form-control',
                        'type' => 'number',
                        'min' => 0,
                    ];

                    $stok = [
                        'name' => 'stok',
                        'id' => 'stok',
                        'value' => $barang->stok,
                        'class' => 'form-control',
                        'type' => 'number',
                        'min' => 0,
                    ];

                    $gambar = [
                        'name' => 'gambar',
                        'id' => 'gambar',
                        'value' => null,
                        'class' => 'form-control',
                    ]; 

                    $submit = [
                        'name' => 'submit',
                        'id' => 'submit',
                        'value' => 'Submit',
                        'class' => 'btn btn-success',
                        'type' => 'submit',
                    ];

                    ?>
                <?= form_open_multipart('Barang/update/'.$barang->id) ?>
                <div class="form-group">
                    <?= form_label("Nama", "nama") ?>
                    <?= form_input($nama) ?>
                </div>

                <div class="form-group">
                    <?= form_label("Harga", "harga") ?>
                    <?= form_input($harga) ?>
                </div>

                <div class="form-group">
                    <?= form_label("Stok", "stok") ?>
                    <?= form_input($stok) ?>
                </div>

                <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$barang->gambar) ?>" />

                <div class="form-group">
                    <?= form_label("Gambar", "gambar") ?>
                    <?= form_upload($gambar) ?>
                </div>

                <div class="text-right">
                    <?= form_submit($submit) ?>
                </div>

                <?= form_close() ?>
                <?= $this->endSection() ?>
</section>