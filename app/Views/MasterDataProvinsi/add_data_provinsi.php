<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Provinsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- SIDEBAR CONTENT -->
    <?php echo view('layout/header'); ?>
    <!-- END SIDEBAR -->
    <div class="container">
        <h1>Tambah Data Provinsi</h1>
        <form action="<?= base_url('proses_add_provinsi') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" class="text-primary">Provinsi</label>
                <input type="text" class="form-control" id_provinsi="provinsi" name="provinsi">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary bi bi-save2"> Save Data</button>
            </div>

            <div>
                <a href="<?= base_url('provinsi') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- FOOTER CONTENT -->
    <?php echo view('layout/footer'); ?>
    <!-- END FOOTER -->
</body>

</html>