<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Penduduk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->
    <!-- <icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body>
    <div style="text-align: center;">
        <h1>Detail Data Penduduk</h1>
    </div>
    <table id="detailTable" class="table table-striped">
        <tr>
            <th>Foto</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Nama Ibu</th>
            <th>Berat Badan</th>
            <th>Makanan Favorit</th>
            <th>Agama</th>
            <th>Gol Darah</th>
            <th>Ukuran Baju</th>
        </tr>


        <div class="card mb-3" style="max-width: 1600px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('uploads/' . $penduduk->foto) ?>" alt="" width="5000" height="5000" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <p><strong>NIK:</strong> <?= $penduduk->nik ?></p>
                    <p><strong>Nama Lengkap:</strong> <?= $penduduk->nama_lengkap ?></p>
                    <p><strong>Nama Panggilan:</strong> <?= $penduduk->nama_panggilan ?></p>
                    <p><strong>Tanggal Lahir:</strong> <?= $penduduk->tempat_tanggal_lahir ?></p>
                    <p><strong>Nama Ibu:</strong><?= $penduduk->nama_ibu ?></p>
                    <p><strong>Berat Badan:</strong> <?= $penduduk->berat_badan ?></p>
                    <p><strong>Makanan Favorit:</strong> <?= $penduduk->makanan_favorit ?></p>
                    <p><strong>Agama:</strong> <?= $penduduk->agama ?></p>
                    <p><strong>Golongan Darah:</strong> <?= $penduduk->golonganDarah ?></p>
                    <p><strong>Ukuran Baju:</strong> <?= $penduduk->ukuranBaju ?></p>
                    <p><strong>Document:</strong> <?= $penduduk->document ?></p>
                    <p><strong>Provinsi:</strong> <?= $penduduk->provinsi ?></p>
                    <p><strong>Kabupaten:</strong> <?= $penduduk->kabupaten ?></p>
                    <p><strong>Kecamatan:</strong> <?= $penduduk->kecamatan ?></p>
                    <p><strong>Desa:</strong> <?= $penduduk->desa ?></p>
                    <p><strong>Password:</strong> <?= $penduduk->password ?></p>
                </div>
            </div>
        </div>
    </table>

    <!-- <button type="d" class="btn btn-primary">Back to List</button> -->
    <a href="<?= base_url('/penduduk') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
    <!-- footer CONTENT -->
    <?php echo view('layout/footer'); ?>
    <!-- END footer -->

    <!-- <script>
        $(document).ready(function() {
            $('#detailTable').DataTable();
        });
    </script> -->

</body>

</html>

<!-- opsi kedua dengan mode tabel -->

<!-- <table id="detailTable" class="table table-striped">
    <thead>
        <tr>
            <th>Foto</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Nama Ibu</th>
            <th>Berat Badan</th>
            <th>Makanan Favorit</th>
            <th>Agama</th>
            <th>Gol Darah</th>
            <th>Ukuran Baju</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="<//?= base_url('uploads/' . $penduduk->foto) ?>" alt="Foto" class="img-fluid rounded-start" width="100" height="100"></td>
            <td><//?= $penduduk->nik ?></td>
            <td><//?= $penduduk->nama_lengkap ?></td>
            <td><//?= $penduduk->nama_panggilan ?></td>
            <td><//?= $penduduk->tempat_tanggal_lahir ?></td>
            <td><//?= $penduduk->nama_ibu ?></td>
            <td><//?= $penduduk->berat_badan ?></td>
            <td><//?= $penduduk->makanan_favorit ?></td>
            <td><//?= $penduduk->agama ?></td>
            <td><//?= $penduduk->golonganDarah ?></td>
            <td><//?= $penduduk->ukuranBaju ?></td>
        </tr>
    </tbody>
</table> -->