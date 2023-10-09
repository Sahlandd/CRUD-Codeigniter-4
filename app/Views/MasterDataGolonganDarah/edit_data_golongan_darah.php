<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golongan Darah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <div class="container">
        <!-- HEADER CONTENT -->
        <?php echo view('layout/header'); ?>
        <!-- END HEADER -->
        <h1>Data Golongan Darah</h1>
        <form action="<?= base_url('proses_edit_golongan_darah') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Golongan Darah</label>
                <input type="text" class="form-control" id_golonganDarah="golonganDarah" name="golonganDarah" value="<?= $data_golonganDarah->golonganDarah ?>">
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary bi bi-save2"> Save Data</button>
            </div>

            <div>
                <!-- <button type="d" class="btn btn-primary">Back to List</button> -->
                <a href="<?= base_url('golonganDarah') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- HEADER footer -->
    <?php echo view('layout/footer'); ?>
    <!-- END footer -->
</body>

</html>