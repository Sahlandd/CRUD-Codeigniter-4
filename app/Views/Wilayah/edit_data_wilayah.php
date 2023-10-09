<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wilayah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <!-- HEADER CONTENT -->
    <?php echo view('layout/header'); ?>
    <!-- END HEADER -->
    <div class="container">
        <h1>Edit Data Wilayah</h1>
        <form action="<?= base_url('proses_edit_wilayah') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" id_desa="id_desa" name="id_desa" class="form-label">Pilih Desa</label>
                <select class="form-select" name="id_desa" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_desa as $desa) : ?>
                        <option value="<?= $desa->desa ?>"><?= $desa->desa ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id_wilayah="agama" name="kecamatan" value="<?= $data_wilayah->kecamatan ?>">
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" id_kecamatan="id_kecamatan" name="id_kecamatan" class="form-label">Pilih Kecamatan</label>
                <select class="form-select" name="id_kecamatan" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_kecamatan as $kecamatan) : ?>
                        <option value="<?= $kecamatan->kecamatan ?>"><?= $kecamatan->kecamatan ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kota</label>
                <input type="text" class="form-control" id_wilayah="kota" name="kota" value="<?= $data_wilayah->kota ?>">
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" id_kota="id_kota" name="id_kota" class="form-label">Pilih Kota</label>
                <select class="form-select" name="id_kota" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_kota as $kota) : ?>
                        <option value="<?= $kota->kota ?>"><?= $kota->kota ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" id_wilayah="kabupaten" name="kabupaten" value="<?= $data_wilayah->kabupaten ?>">
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" id_kabupaten="id_kabupaten" name="id_kabupaten" class="form-label">Pilih Kabupaten</label>
                <select class="form-select" name="id_kabupaten" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_kabupaten as $kabupaten) : ?>
                        <option value="<?= $kabupaten->kabupaten ?>"><?= $kabupaten->kabupaten ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary bi bi-save2"> Save Data</button>
            </div>

            <div>
                <a href="<?= base_url('/wilayah') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
            </div>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- HEADER footer -->
<?php echo view('layout/footer'); ?>
<!-- END footer -->

</html>