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
            <div class="card-body">
                <div class="form-group">
                    <!-- <label for="">Filter Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" onchange="Func_a()" class="form-control form-control-sm">
                        <option>-Filter Kecamatan-</option>
                        <option value="">All Data</option>
                        <php foreach ($dataKecamatan as $row) : ?>
                            <option value="<= $row->kecamatan ?>"><= $row->kecamatan ?></option>
                        <php endforeach; ?>
                    </select>
                    <label for="">Filter Kota</label>
                    <select name="kota" id="kota" onchange="Func_a()" class="form-control form-control-sm">
                        <option>-Filter Kota-</option>
                        <option value="">All Data</option>
                        <php foreach ($dataKota as $row) : ?>
                            <option value="<= $row->kota ?>"><= $row->kota ?></option>
                        <php endforeach; ?>
                    </select>
                    <label for="">Filter Kabupaten</label>
                    <select name="kabupaten" id="kabupaten" onchange="Func_a()" class="form-control form-control-sm">
                        <option>-Filter Kabupaten-</option>
                        <option value="">All Data</option>
                        <php foreach ($dataKabupaten as $row) : ?>
                            <option value="<= $row->kabupaten ?>"><= $row->kabupaten ?></option>
                        <php endforeach; ?>
                    </select>??????????????? -->
                </div>
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Desa</th> -->
                            <th scope="col">Desa</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Kabupaten</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_data_wilayah as $wilayah) : ?>
                            <tr>
                                <td><?= $wilayah->id_desa ?></td>
                                <td><?= $wilayah->id_kecamatan ?></td>
                                <td><?= $wilayah->id_kota ?></td>
                                <td><?= $wilayah->id_kabupaten ?></td>
                                <td>
                                    <span style="display: inline-block;">
                                        <a href="<?= base_url('detail_data_wilayah') . '/' . $wilayah->id_wilayah ?>" class="btn btn-info btn-sm bi bi-card-list"></a>
                                        <a href="<?= base_url('edit_data_wilayah') . '/' . $wilayah->id_wilayah ?>" class="btn btn-warning btn-sm bi bi-pencil-square"></a>
                                        <a href="<?= base_url('delete_data_wilayah') . '/' . $wilayah->id_wilayah ?>" class="btn btn-danger btn-sm bi bi-trash" onclick="return confirmDelete()"></a>
                                    </span>
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
        <a href="<?= base_url('add_data_wilayah') ?>" class=" btn btn-primary bi bi-plus-square"> Add Data</a>
        <footer>
            <!-- FOOTER -->
            <?php echo view('layout/footer'); ?>
            <!-- END FOOTER -->
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    function Func_a() {
        varx_ip = document.getElementById("wilayah").value;
        var url = "http://localhost/penduduk/public/wilayah"
        var newUrl = url + '?wilayah=' + varx_ip
        return window.location.href = newUrl
    }
</script>

</html>