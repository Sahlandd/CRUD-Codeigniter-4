<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Wilayah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- <icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body>
    <div style="text-align: center;">
        <h1>Detail Data Wilayah</h1>
    </div>
    <table id="detailTable" class="table table-striped">
        <!-- <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Kota</th>
            <th>Kabupaten</th>
        </tr> -->


        <div class="card mb-3" style="max-width: 1600px;">
            <div class="col-md-8">
                <p><strong>Desa:</strong> <?= $wilayah->desa ?></p>
                <p><strong>Kecamatan:</strong> <?= $wilayah->kecamatan ?></p>
                <p><strong>Kota:</strong> <?= $wilayah->kota ?></p>
                <p><strong>Kabupaten:</strong> <?= $wilayah->kabupaten ?></p>
            </div>
        </div>
        </div>
    </table>

    <!-- <button type="d" class="btn btn-primary">Back to List</button> -->
    <a href="<?= base_url('/wilayah') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
    <!-- footer CONTENT -->
    <?php echo view('layout/footer'); ?>
    <!-- END footer -->

    <script>
        $(document).ready(function() {
            $('#detailTable').DataTable();
        });
    </script>

</body>

</html>