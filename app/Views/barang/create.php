<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<?php

use function PHPSTORM_META\type;

$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'form-control',
    'placeholder' => 'Nama Barang'
];
$harga = [
    'name' => 'harga',
    'id' => 'harga',
    'value' => null,
    'class' => 'form-control',
    'placeholder' => 'Harga Barang',
    'type' => 'number',
    'min' => 0,
];
$stok = [
    'name' => 'stok',
    'id' => 'stok',
    'value' => null,
    'class' => 'form-control',
    'placeholder' => 'Stok Barang',
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
<h1>Tambah Barang</h1>
<?= form_open_multipart('Barang/create') ?>
<div class="form-group">
    <?= form_label("Nama Barang", "nama") ?>
    <?= form_input($nama) ?>
</div>
<div class="form-group">
    <?= form_label("Harga Barang", "harga") ?>
    <?= form_input($harga) ?>
</div>
<div class="form-group">
    <?= form_label("Stok Barang", "stok") ?>
    <?= form_input($stok) ?>
</div>
<div class="form-group">
    <?= form_label("Gambar Barang", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>
<div class="text-right">
    <?= form_submit($submit) ?>
</div>
<?= form_close() ?>
<?= $this->endSection(); ?>