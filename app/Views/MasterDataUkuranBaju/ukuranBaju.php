<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>

<body>
    <!-- SIDEBAR -->
    <?php echo view('layout/sidebar'); ?>
    <!-- END SIDEBAR -->

    <div class="container">
        <!-- HEADER -->
        <?php echo view('layout/header'); ?>
        <!-- END HEADER -->
        <div class="card">
            <div class="card-header">
                Form Data Ukuran Baju
                <a href="<?= base_url('add_data_ukuran_baju') ?>" class="btn btn-primary btn-sm float-right">Tambah Ukuran Baju</a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Filter Ukuran Baju</label>
                    <select name="ukuranBaju" id="ukuranBaju" onchange="Func_a()" class="form-control form-control-sm">
                        <option value="">-Filter Ukuran Baju-</option>
                        <option value="">All Data</option>
                        <?php foreach ($dataUkuranBaju as $row) : ?>
                            <option value="<?= $row->ukuranBaju ?>"><?= $row->ukuranBaju ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th scope="col">Ukuran Baju</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_data_ukuranBaju as $ukuranBaju) : ?>
                            <tr>
                                <td><?= $ukuranBaju->ukuranBaju ?></td>
                                <td>
                                    <span style="display: inline-block;">
                                        <a href="<?= base_url('edit_data_ukuran_baju') . '/' . $ukuranBaju->id_ukuranBaju ?>" class="btn btn-warning btn-sm bi bi-pencil-square"></a>
                                    </span>
                                    <a href="<?= base_url('delete_data_ukuran_baju') . '/' . $ukuranBaju->id_ukuranBaju ?>" class="btn btn-danger btn-sm bi bi-trash" onclick="return confirmDelete()"></a>
                                </td>
                                <script>
                                    function confirmDelete() {
                                        return confirm("Apakah Anda yakin ingin menghapus data ini?");
                                    }
                                </script>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
</body>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    function Func_a() {
        varx_ip = document.getElementById("ukuranBaju").value;
        var url = "http://localhost/penduduk/public/ukuranBaju"
        var newUrl = url + '?ukuranBaju=' + varx_ip
        return window.location.href = newUrl
    }
</script>
<footer>
    <!-- FOOTER -->
    <?php echo view('layout/footer'); ?>
    <!-- END FOOTER -->
</footer>

</html>