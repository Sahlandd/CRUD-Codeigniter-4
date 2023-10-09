<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kecamatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <!-- SIDEBAR CONTENT -->
    <?php echo view('layout/header'); ?>
    <!-- END SIDEBAR -->
    <div class="container">
        <h1>Tambah Data Kecamatan</h1>
        <form action="<?= base_url('proses_add_kecamatan') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                <select id="provinsi" name="id_provinsi" class="form-select" required aria-label="select example">
                    <option value="">Pilih Provinsi</option>
                    <?php foreach ($all_data_provinsi as $provinsi) : ?>
                        <option value="<?= $provinsi->id_provinsi ?>"><?= $provinsi->provinsi ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <select id="kabupaten" name="id_kabupaten" class="form-select" required aria-label="select example" disabled>
                    <option value="">Pilih Kabupaten</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" class="text-primary">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" name="id_kecamatan">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary bi bi-save2"> Save Data</button>
            </div>

            <div>
                <a href="<?= base_url('kecamatan') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- FOOTER CONTENT -->
    <?php echo view('layout/footer'); ?>
    <!-- END FOOTER -->
</body>
<script>
    document.getElementById('provinsi').addEventListener('change', function() {
        let id_provinsi = this.value;

        axios.post('/location/getKabupaten', {
                id_provinsi
            })
            .then(response => {
                let kabupatenSelect = document.getElementById('kabupaten');
                kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten</option>';
                response.data.forEach(kabupaten => {
                    let option = document.createElement('option');
                    option.value = kabupaten.id_kabupaten;
                    option.textContent = kabupaten.kabupaten;
                    kabupatenSelect.appendChild(option);
                });
                kabupatenSelect.disabled = false;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>

</html>