<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penduduk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <!-- HEADER CONTENT -->
        <?php echo view('layout/header'); ?>
        <!-- END HEADER -->
        <h1>Edit Data Penduduk</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_warga" value="<?= $data_penduduk->id_warga ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload Foto Anda</label>
                <input type="file" class="form-control" name="id_warga" id="foto" aria-label="file example">
                <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="id_warga" value="<?= $data_penduduk->nik ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="id_warga" required oninput="validateNamaLengkap()" value="<?= $data_penduduk->nama_lengkap ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama_panggilan" name="id_warga" required oninput="validateNamaPanggilan()" value="<?= $data_penduduk->nama_panggilan ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tempat_tanggal_lahir" name="id_warga" value="<?= $data_penduduk->tempat_tanggal_lahir ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="id_warga" required oninput="validateNamaIbu()" value="<?= $data_penduduk->nama_ibu ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Berat Badan</label>
                <input type="text" class="form-control" id="berat_badan" name="id_warga" required oninput="validateBeratBadan()" value="<?= $data_penduduk->berat_badan ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Makanan Favorit</label>
                <input type="text" class="form-control" id="makanan_favorit" name="id_warga" required oninput="validateMakananFavorit()" value="<?= $data_penduduk->makanan_favorit ?>">
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_agama" class="form-label">Pilih Agama</label>
                <select class="form-select" id="id_agama" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_agama as $agama) : ?><?= $data_penduduk->makanan_favorit ?>
                    <option value="<?= $agama->id_agama ?>"><?= $agama->agama ?></option>
                <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_warga" class="form-label">Pilih Agama</label>
                <?php foreach ($all_data_agama as $agama) : ?>
                    <?php
                    $checked = $agama->id_agama == $data_penduduk->id_agama ? 'checked' : '';
                    ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="agama" id="id_agama<?= $agama->id_agama ?>" value="<?= $agama->id_agama ?>" <?= $checked ?>>
                        <label class="form-check-label" for="id_agama<?= $agama->id_agama ?>">
                            <?= $agama->agama ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" name="agama" class="form-label">Pilih Agama</label>
                <select type="radio" class="form-select" id="id_agama" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_agama as $agama) : ?>
                        <?php
                        $selected = $agama->id_agama == $data_penduduk->id_agama ? 'selected' : '';
                        ?>
                        <option value="<?= $agama->id_agama ?>" <?= $selected ?>><?= $agama->agama ?></option>
                    <?php endforeach; ?>
                </select>
            </div> -->

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_golonganDarah" class="form-label">Pilih Golongan Darah</label>
                <select class="form-select" id="id_golonganDarah" name="id_golonganDarah" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_golonganDarah as $golonganDarah) : ?>
                        <option value="<?= $golonganDarah->id_golonganDarah ?>"><?= $golonganDarah->golonganDarah ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_warga" class="form-label">Pilih Golongan Darah</label>
                <select class="form-select" id="id_golonganDarah" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_golonganDarah as $golonganDarah) : ?>
                        <?php
                        $selected = $golonganDarah->id_golonganDarah == $data_penduduk->id_golonganDarah ? 'selected' : '';
                        ?>
                        <option value="<?= $golonganDarah->id_golonganDarah ?>" <?= $selected ?>><?= $golonganDarah->golonganDarah ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_ukuranBaju" class="form-label">Pilih Ukuran Baju</label>
                <select class="form-select" id="id_ukuranBaju" name="id_ukuranBaju" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_ukuranBaju as $ukuranBaju) : ?>
                        <option value="<?= $ukuranBaju->id_ukuranBaju ?>"><?= $ukuranBaju->ukuranBaju ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_warga" class="form-label">Pilih Ukuran Baju</label>
                <select class="form-select" id="id_ukuranBaju" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_ukuranBaju as $ukuranBaju) : ?>
                        <?php
                        $selected = $ukuranBaju->id_ukuranBaju == $data_penduduk->id_ukuranBaju ? 'selected' : '';
                        ?>
                        <option value="<?= $ukuranBaju->id_ukuranBaju ?>" <?= $selected ?>><?= $ukuranBaju->ukuranBaju ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_document" class="form-label">Pilih Document</label>
                <select class="form-select" id="id_document" name="id_document" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_document as $document) : ?>
                        <option value="<?= $document->id_document ?>"><?= $document->document ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="id_document" class="form-label">Pilih Document</label>
                <select class="form-select" id="id_document" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_document as $document) : ?>
                        <?php
                        $selected = $document->id_document == $data_penduduk->id_document ? 'selected' : '';
                        ?>
                        <option value="<?= $document->id_document ?>" <?= $selected ?>><?= $document->document ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Example invalid select feedback</div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                <select id="provinsi" name="id_warga" class="form-select" required aria-label="select example">
                    <option value="">Pilih Provinsi</option>
                    <?php foreach ($all_data_provinsi as $provinsi) : ?>
                        <?php
                        $selectedProvinsi = $provinsi->id_provinsi == $data_penduduk->id_provinsi ? 'selected' : '';
                        ?>
                        <option value="<?= $provinsi->id_provinsi ?>" <?= $selectedProvinsi ?>><?= $provinsi->provinsi ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                <select id="kabupaten" name="id_warga" class="form-select" required aria-label="select example">
                    <option value="">Pilih Kabupaten</option>
                    <?php foreach ($all_data_kabupaten as $kabupaten) : ?>
                        <?php
                        $selectedKabupaten = $kabupaten->id_kabupaten == $data_penduduk->id_kabupaten ? 'selected' : '';
                        ?>
                        <option value="<?= $kabupaten->id_kabupaten ?>" <?= $selectedKabupaten ?>><?= $kabupaten->kabupaten ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                <select id="kecamatan" name="id_warga" class="form-select" required aria-label="select example">
                    <option value="">Pilih Kecamatan</option>
                    <?php foreach ($all_data_kecamatan as $kecamatan) : ?>
                        <?php
                        $selectedKecamatan = $kecamatan->id_kecamatan == $data_penduduk->id_kecamatan ? 'selected' : '';
                        ?>
                        <option value="<?= $kecamatan->id_kecamatan ?>" <?= $selectedKecamatan ?>><?= $kecamatan->kecamatan ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Desa</label>
                <select id="desa" name="id_warga" class="form-select" required aria-label="select example">
                    <option value="">Pilih Desa</option>
                    <?php foreach ($all_data_desa as $desa) : ?>
                        <?php
                        $selectedDesa = $desa->id_desa == $data_penduduk->id_desa ? 'selected' : '';
                        ?>
                        <option value="<?= $desa->id_desa ?>" <?= $selectedDesa ?>><?= $desa->desa ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <style>
                /* Style all input fields */
                input {
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    margin-top: 6px;
                    margin-bottom: 16px;
                }

                /* Style the submit button */
                input[type=submit] {
                    background-color: #04AA6D;
                    color: white;
                }

                /* Style the container for inputs */
                .container {
                    background-color: #f1f1f1;
                    padding: 20px;
                }

                /* The message box is shown when the user clicks on the password field */
                #message {
                    display: none;
                    background: #f1f1f1;
                    color: #000;
                    position: relative;
                    padding: 20px;
                    margin-top: 10px;
                }

                #message p {
                    padding: 10px 35px;
                    font-size: 18px;
                }

                /* Add a green text color and a checkmark when the requirements are right */
                .valid {
                    color: green;
                }

                .valid:before {
                    position: relative;
                    left: -35px;
                    content: "-";
                }

                /* Add a red text color and an "x" when the requirements are wrong */
                .invalid {
                    color: red;
                }

                .invalid:before {
                    position: relative;
                    left: -35px;
                    content: "-";
                }
            </style>

            <div>
                <label for="psw" class="form-label">Password</label>
                <input type="password" class="form-label" id="password" name="id_warga" value="<?= $data_penduduk->password ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8-12 karakter" required>
            </div>

            <div id="message" style="display:none;">
                <p id="letter" class="invalid">A lowercase letter</p>
                <p id="capital" class="invalid">A capital letter</p>
                <p id="number" class="invalid">A number</p>
                <p id="length" class="invalid">At least 8 and maximum 12 characters</p>
            </div>

            <div class="mb-3">
                <button name="id_warga" type="button" class="btn btn-primary bi bi-save2" onclick="validateEdit()"> Save Data</button>
            </div>

            <div>
                <a href="<?= base_url('/penduduk') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
            </div>
        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function validateEdit() {
        let nik = document.getElementById('nik').value;
        let namaLengkap = document.getElementById('nama_lengkap').value;
        let namaPanggilan = document.getElementById('nama_panggilan').value;
        let tempatTanggalLahir = document.getElementById('tempat_tanggal_lahir').value;
        let namaIbu = document.getElementById('nama_ibu').value;
        let beratBadan = document.getElementById('berat_badan').value;
        let makananFavorit = document.getElementById('makanan_favorit').value;
        let agama = null;
        let golonganDarah = document.getElementById('id_golonganDarah').value;
        let ukuranBaju = document.getElementById('id_ukuranBaju').value;
        let dokument = document.getElementById('id_document').value;
        let provinsi = document.getElementById('provinsi').value;
        let kabupaten = document.getElementById('kabupaten').value;
        let kecamatan = document.getElementById('kecamatan').value;
        let desa = document.getElementById('desa').value;
        let password = document.getElementById('password').value;
        let fotoInput = document.getElementById('foto');
        let foto = fotoInput.files[0];

        var radios = document.getElementsByName('agama');
        for (var radio of radios) {
            if (radio.checked) {
                agama = radio.value;
            }
        }

        if (!foto) {
            return alert('Mohon pilih foto Anda');
        }
        if (!/\.(jpe?g|png)$/i.test(foto.name)) {
            return alert('Foto harus berupa file dengan ekstensi JPG atau PNG');
        }
        const maxSize = 1024 * 1024;
        if (foto.size > maxSize) {
            return alert('Ukuran foto maksimal 1MB');
        }
        if (!nik) {
            return alert('NIK harus diisi')
        }
        if (!/^\d{9}$/.test(nik)) {
            return alert('NIK harus terdiri dari 9 angka');
        }
        if (!namaLengkap) {
            return alert('Nama Lengkap harus diisi')
        }
        if (!/^[a-zA-Z\s]+$/.test(namaLengkap)) {
            return alert('Nama Lengkap hanya boleh terdiri dari huruf.');
        }
        if (!namaPanggilan) {
            return alert('Nama Panggilan harus diisi')
        }
        if (!/^[a-zA-Z\s]+$/.test(namaPanggilan)) {
            return alert('Nama Panggilan hanya boleh terdiri dari huruf.');
        }
        if (!namaIbu) {
            return alert('Nama Ibu harus diisi')
        }
        if (!/^[a-zA-Z\s]+$/.test(namaIbu)) {
            return alert('Nama Ibu hanya boleh terdiri dari huruf.');
        }
        if (!beratBadan) {
            return alert('Berat Badan harus diisi')
        }
        if (!/^\d{1,3}$/.test(beratBadan)) {
            return alert('Berat Badan harus berisi angka dengan maksimal 3 digit.');
        }
        if (!makananFavorit) {
            return alert('Makanan Favorit harus diisi')
        }
        if (!/^[a-zA-Z\s]+$/.test(makananFavorit)) {
            return alert('Makanan Favorit hanya boleh terdiri dari huruf.');
        }
        if (!agama) {
            return alert('Agama harus diisi')
        }
        if (!golonganDarah) {
            return alert('Golongan Darah harus diisi')
        }
        if (!ukuranBaju) {
            return alert('Ukuran Baju harus diisi')
        }
        if (!dokument) {
            return alert('Document harus diisi')
        }
        if (!provinsi) {
            return alert('Provinsi harus diisi')
        }
        if (!kabupaten) {
            return alert('Kabupaten harus diisi')
        }
        if (!kecamatan) {
            return alert('Kecamatan harus diisi')
        }
        if (!desa) {
            return alert('Desa harus diisi')
        }
        if (!password) {
            return alert('Password harus diisi')
        }

        // Jikavalidasi berhasil, pake Axios untuk menyimpan data
        let formData = new FormData();
        formData.append('nik', nik);
        formData.append('nama_lengkap', namaLengkap);
        formData.append('nama_panggilan', namaPanggilan);
        formData.append('tempat_tanggal_lahir', tempatTanggalLahir);
        formData.append('nama_ibu', namaIbu);
        formData.append('berat_badan', beratBadan);
        formData.append('makanan_favorit', makananFavorit);
        formData.append('id_agama', agama);
        formData.append('id_golonganDarah', golonganDarah);
        formData.append('id_ukuranBaju', ukuranBaju);
        formData.append('id_document', dokument);
        formData.append('id_provinsi', provinsi);
        formData.append('id_kabupaten', kabupaten);
        formData.append('id_kecamatan', kecamatan);
        formData.append('id_desa', desa);
        formData.append('password', password);
        formData.append('foto', foto);

        axios.post('/proses_edit_penduduk', formData)
            .then(function(response) {
                alert('Data berhasil disimpan!');
            })
            .catch(function(error) {
                alert('Gagal menyimpan data: ' + error.message);
            });
    }

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

    document.getElementById('kabupaten').addEventListener('change', function() {
        let id_kabupaten = this.value;

        axios.post('/location/getKecamatan', {
                id_kabupaten
            })
            .then(response => {
                let kecamatanSelect = document.getElementById('kecamatan');
                kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                response.data.forEach(kecamatan => {
                    let option = document.createElement('option');
                    option.value = kecamatan.id_kecamatan;
                    option.textContent = kecamatan.kecamatan;
                    kecamatanSelect.appendChild(option);
                });
                kecamatanSelect.disabled = false;
            })
            .catch(error => {
                console.error(error);
            });
    });

    document.getElementById('kecamatan').addEventListener('change', function() {
        let id_kecamatan = this.value;

        axios.post('/location/getDesa', {
                id_kecamatan
            })
            .then(response => {
                let desaSelect = document.getElementById('desa');
                desaSelect.innerHTML = '<option value="">Pilih Desa</option>';
                response.data.forEach(desa => {
                    let option = document.createElement('option');
                    option.value = desa.id_desa;
                    option.textContent = desa.desa;
                    desaSelect.appendChild(option);
                });
                desaSelect.disabled = false;
            })
            .catch(error => {
                console.error(error);
            });
    });

    //select option default
    const provinsiDropdown = document.getElementById('provinsi');
    const kabupatenDropdown = document.getElementById('kabupaten');
    const kecamatanDropdown = document.getElementById('kecamatan');
    const desaDropdown = document.getElementById('desa');

    const allDataKabupaten = <?php echo json_encode($all_data_kabupaten); ?>;
    const allDataKecamatan = <?php echo json_encode($all_data_kecamatan); ?>;
    const allDataDesa = <?php echo json_encode($all_data_desa); ?>;

    function populateKabupatenDropdown(selectedProvinsi) {
        kabupatenDropdown.innerHTML = '<option value="">Pilih Kabupaten</option>';
        const kabupatenOptions = allDataKabupaten.filter(item => item.id_provinsi === selectedProvinsi);
        kabupatenOptions.forEach(item => {
            const option = document.createElement('option');
            option.value = item.id_kabupaten;
            option.textContent = item.kabupaten;
            kabupatenDropdown.appendChild(option);
        });
    }

    function populateKecamatanDropdown(selectedKabupaten) {
        kecamatanDropdown.innerHTML = '<option value="">Pilih Kecamatan</option>';
        const kecamatanOptions = allDataKecamatan.filter(item => item.id_kabupaten === selectedKabupaten);
        kecamatanOptions.forEach(item => {
            const option = document.createElement('option');
            option.value = item.id_kecamatan;
            option.textContent = item.kecamatan;
            kecamatanDropdown.appendChild(option);
        });
    }

    function populateDesaDropdown(selectedKecamatan) {
        desaDropdown.innerHTML = '<option value="">Pilih Desa</option>';
        const desaOptions = allDataDesa.filter(item => item.id_kecamatan === selectedKecamatan);
        desaOptions.forEach(item => {
            const option = document.createElement('option');
            option.value = item.id_desa;
            option.textContent = item.desa;
            desaDropdown.appendChild(option);
        });
    }

    provinsiDropdown.addEventListener('change', function() {
        const selectedProvinsi = this.value;
        populateKabupatenDropdown(selectedProvinsi);

        const kabupatenOptions = kabupatenDropdown.querySelectorAll('option');
        kabupatenOptions.forEach(option => {
            if (option.value !== selectedProvinsi) {
                option.disabled = true;
            } else {
                option.disabled = false;
            }
        });

        kecamatanDropdown.innerHTML = '<option value="">Pilih Kecamatan</option>';
        kecamatanDropdown.disabled = true;
        desaDropdown.innerHTML = '<option value="">Pilih Desa</option>';
        desaDropdown.disabled = true;
    });

    kabupatenDropdown.addEventListener('change', function() {
        const selectedKabupaten = this.value;
        populateKecamatanDropdown(selectedKabupaten);

        const kecamatanOptions = kecamatanDropdown.querySelectorAll('option');
        kecamatanOptions.forEach(option => {
            if (option.value !== selectedKabupaten) {
                option.disabled = true;
            } else {
                option.disabled = false;
            }
        });

        desaDropdown.innerHTML = '<option value="">Pilih Desa</option>';
        desaDropdown.disabled = true;
    });

    kecamatanDropdown.addEventListener('change', function() {
        const selectedKecamatan = this.value;
        populateDesaDropdown(selectedKecamatan);

        const desaOptions = desaDropdown.querySelectorAll('option');
        desaOptions.forEach(option => {
            if (option.value !== selectedKecamatan) {
                option.disabled = true;
            } else {
                option.disabled = false;
            }
        });
    });


    //validasi foto
    function validateForm() {
        const fotoInput = document.getElementById('foto');
        const errorMessage = document.querySelector('.invalid-feedback');

        if (!fotoInput.files || !fotoInput.files[0]) {
            errorMessage.textContent = 'Mohon pilih foto Anda.';
            return false; // Prevent form submission
        }

        errorMessage.textContent = ''; // Clear error message if a file is selected
        return true; // Allow form submission
    }

    //validasi password
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    myInput.onkeyup = function() {
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        if (myInput.value.length >= 8 && myInput.value.length <= 12) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }

    //validasi nik
    function validateNIK() {
        const nikInput = $('#nik').val();
        const errorMessage = $('#error-message-nik');

        if (!/^\d{9}$/.test(nikInput)) {
            errorMessage.text('NIK harus terdiri dari 9 angka.');
            return false;
        } else {
            errorMessage.text('');
            return true;
        }
    }

    $('#nik').on('input', function() {
        validateNIK();
    });

    $('#basic-form').on('submit', function(e) {
        if (!validateNIK()) {
            e.preventDefault();
        }
    });

    //validasi nama lengkap
    function validateNamaLengkap() {
        const namaLengkapInput = document.getElementById('nama_lengkap').value;
        const namaLengkapPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message-nl');

        if (namaLengkapInput.trim() === "") {
            errorMessage.textContent = "Nama Lengkap harus diisi.";
        } else if (!namaLengkapPattern.test(namaLengkapInput)) {
            errorMessage.textContent = "Nama Lengkap hanya boleh terdiri dari huruf.";
        } else {
            errorMessage.textContent = "";
        }
    }

    function submitForm() {
        const namaLengkapInput = document.getElementById('nama_lengkap').value;
        const namaLengkapPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message-nl');

        if (namaLengkapInput.trim() === "") {
            errorMessage.textContent = "Nama Lengkap harus diisi.";
        } else if (!namaLengkapPattern.test(namaLengkapInput)) {
            errorMessage.textContent = "Nama Lengkap hanya boleh terdiri dari huruf.";
        } else {}
    }

    //validasi nama panggilan
    function validateNamaPanggilan() {
        const namaPanggilanInput = document.getElementById('nama_panggilan').value;
        const namaPanggilanPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message-np');

        if (namaPanggilanInput.trim() === "") {
            errorMessage.textContent = "Nama Panggilan harus diisi.";
        } else if (!namaPanggilanPattern.test(namaPanggilanInput)) {
            errorMessage.textContent = "Nama Panggilan hanya boleh terdiri dari huruf.";
        } else {
            errorMessage.textContent = "";
        }
    }

    function submitForm() {
        const namaPanggilanInput = document.getElementById('nama_panggilan').value;
        const namaPanggilanPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message-np');

        if (namaPanggilanInput.trim() === "") {
            errorMessage.textContent = "Nama Panggilan harus diisi.";
        } else if (!namaPanggilanPattern.test(namaPanggilanInput)) {
            errorMessage.textContent = "Nama Panggilan hanya boleh terdiri dari huruf.";
        } else {

        }
    }

    //validasi tanggal
    function validateTanggalLahir() {
        const tanggalLahirInput = document.getElementById('tempat_tanggal_lahir').value;
        const errorMessage = document.getElementById('error-message-tgl');

        if (tanggalLahirInput === "") {
            errorMessage.textContent = "Tanggal Lahir harus diisi.";
        } else {
            errorMessage.textContent = "";
        }
    }

    function submitForm() {
        validateTanggalLahir(); // Panggil fungsi validasi sebelum melakukan submit form

        const tanggalLahirInput = document.getElementById('tempat_tanggal_lahir').value;
    }

    //validasi nama ibu
    function validateNamaIbu() {
        const namaIbuInput = document.getElementById('nama_ibu').value;
        const namaIbuPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message-ni');

        if (namaIbuInput.trim() === "") {
            errorMessage.textContent = "Nama Ibu harus diisi.";
        } else if (!namaIbuPattern.test(namaIbuInput)) {
            errorMessage.textContent = "Nama Ibu hanya boleh terdiri dari huruf.";
        } else {
            errorMessage.textContent = "";
        }
    }

    function submitForm() {
        const namaIbuInput = document.getElementById('nama_ibu').value;
        const namaIbuPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message-ni');

        if (namaIbuInput.trim() === "") {
            errorMessage.textContent = "Nama Ibu harus diisi.";
        } else if (!namaIbuPattern.test(namaIbuInput)) {
            errorMessage.textContent = "Nama Ibu hanya boleh terdiri dari huruf.";
        } else {
            // Form submission logic here, if needed
            // For example: document.getElementById('myForm').submit();
        }
    }
    //validasi berat badan
    function validateBeratBadan() {
        const beratBadanInput = document.getElementById('berat_badan').value;
        const beratBadanPattern = /^\d{1,3}$/;
        const errorMessage = document.getElementById('error-message-bb');

        if (beratBadanInput.trim() === "") {
            errorMessage.textContent = "Berat Badan harus diisi.";
        } else if (!beratBadanPattern.test(beratBadanInput)) {
            errorMessage.textContent = "Berat Badan harus berisi angka dengan maksimal 3 digit.";
        } else {
            errorMessage.textContent = "";
        }
    }

    function submitForm() {
        const beratBadanInput = document.getElementById('berat_badan').value;
        const beratBadanPattern = /^\d{1,3}$/;
        const errorMessage = document.getElementById('error-message-bb');

        if (beratBadanInput.trim() === "") {
            errorMessage.textContent = "Berat Badan harus diisi.";
        } else if (!beratBadanPattern.test(beratBadanInput)) {
            errorMessage.textContent = "Berat Badan harus berisi angka dengan maksimal 3 digit.";
        } else {}
    }
    //validasi makanan favorit
    function validateMakananFavorit() {
        const makananFavoritInput = document.getElementById('makanan_favorit').value;
        const makananFavoritPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message');

        if (makananFavoritInput.trim() === "") {
            errorMessage.textContent = "Makanan Favorit harus diisi.";
        } else if (!makananFavoritPattern.test(makananFavoritInput)) {
            errorMessage.textContent = "Makanan Favorit hanya boleh terdiri dari huruf.";
        } else {
            errorMessage.textContent = "";
        }
    }

    function submitForm() {
        const makananFavoritInput = document.getElementById('makanan_favorit').value;
        const makananFavoritPattern = /^[a-zA-Z\s]+$/;
        const errorMessage = document.getElementById('error-message');

        if (makananFavoritInput.trim() === "") {
            errorMessage.textContent = "Makanan Favorit harus diisi.";
        } else if (!makananFavoritPattern.test(makananFavoritInput)) {
            errorMessage.textContent = "Makanan Favorit hanya boleh terdiri dari huruf.";
        } else {}
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- footer CONTENT -->
<?php echo view('layout/footer'); ?>
<!-- END footer -->


</html>