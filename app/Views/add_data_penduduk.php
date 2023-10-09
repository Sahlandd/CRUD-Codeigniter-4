<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penduduk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--link jquery ui css-->
    <!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/jquery-ui-1.12.0/jquery-ui.css'); ?>" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- datepicker styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
</head>

<body>
    <div class="container">
        <br>
        <h4>Tambah Data Penduduk</h4>
        <!-- <form method="POST" action="<= base_url('/user/save_image') ?>" enctype="multipart/form-data"> -->
        <!-- <form action="<= base_url('proses_add_penduduk') ?>" id="basic-form" method="POST" enctype="multipart/form-data"> -->
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" selected>Upload Foto Anda</label>
                <input type="file" name="foto" id="foto" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik">
                <div id="error-message-nik" style="color: red;"></div>
            </div>

            <div class="mb-3">
                <!-- <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" oninput="validateNamaLengkap()"> -->
                <label for="name">Nama Lengkap</label>
                <input id="nama_lengkap" name="nama_lengkap" minlength="3" type="text" required oninput="validateNamaLengkap()">
                <p id="error-message-nl" style="color: red;"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" required oninput="validateNamaPanggilan()">
                <p id="error-message-np" style="color: red;"></p>
            </div>

            <div class="form-group mb-4">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <div class="datepicker date input-group">
                    <input type="text" placeholder="Choose Date" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                <p id="error-message-tgl" style="color: red;"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" oninput="validateNamaIbu()">
                <p id="error-message-ni" style="color: red;"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Berat Badan</label>
                <input type="text" class="form-control" id="berat_badan" name="berat_badan" oninput="validateBeratBadan()">
                <p id="error-message-bb" style="color: red;"></p>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Makanan Favorit</label>
                <input type="text" class="form-control" id="makanan_favorit" name="makanan_favorit" oninput="validateMakananFavorit()">
                <p id="error-message" style="color: red;"></p>
            </div>

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" name="agama" class="form-label">Pilih Agama</label>
                <select class="form-select" id="id_agama" name="agama" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <php foreach ($all_data_agama as $agama) : ?>
                        <option value="<= $agama->id_agama ?>"><= $agama->agama ?></option>
                    <php endforeach; ?>
                    </select>s
            </div> -->

            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pilih Agama</label>
                <?php foreach ($all_data_agama as $agama) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="agama" id="id_agama" value="<?= $agama->id_agama ?>">
                        <label class="form-check-label"<?= $agama->id_agama ?>>
                            <?= $agama->agama ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div> -->

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pilih Agama</label>
                <?php foreach ($all_data_agama as $agama) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="agama" id="id_agama<?= $agama->id_agama ?>" value="<?= $agama->id_agama ?>">
                        <label class="form-check-label" <?= $agama->id_agama ?>>
                            <?= $agama->agama ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="golonganDarah" class="form-label">Pilih Golongan Darah</label>
                <select class="form-select" id="id_golonganDarah" name="golonganDarah" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_golonganDarah as $golonganDarah) : ?>
                        <option value="<?= $golonganDarah->id_golonganDarah ?>"><?= $golonganDarah->golonganDarah ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <div class="invalid-feedback">Opsi Golongan Darah Wajib Dipilih</div> -->
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="ukuranBaju" class="form-label">Pilih Ukuran Baju</label>
                <select class="form-select" id="id_ukuranBaju" name="id_ukuranBaju" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_ukuranBaju as $ukuranBaju) : ?>
                        <option value="<?= $ukuranBaju->id_ukuranBaju ?>"><?= $ukuranBaju->ukuranBaju ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <div class="invalid-feedback">Opsi Ukuran Baju Wajib Dipilih</div> -->
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" name="document" class="form-label">Pilih Document</label>
                <select class="form-select" id="id_document" name="id_document" required aria-label="select example">
                    <option value="">--Open this select menu--</option>
                    <?php foreach ($all_data_document as $document) : ?>
                        <option value="<?= $document->id_document ?>"><?= $document->document ?></option>
                    <?php endforeach; ?>
                </select>
                <!-- <div class="invalid-feedback">Opsi Document Wajib Dipilih</div> -->
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                <select id="provinsi" name="provinsi" class="form-select" required aria-label="select example">
                    <option value="">Pilih Provinsi</option>
                    <?php foreach ($all_data_provinsi as $provinsi) : ?>
                        <option value="<?= $provinsi->id_provinsi ?>"><?= $provinsi->provinsi ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <select id="kabupaten" name="kabupaten" class="form-select" required aria-label="select example" disabled>
                    <option value="">Pilih Kabupaten</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <select id="kecamatan" name="kecamatan" class="form-select" required aria-label="select example" disabled>
                    <option value="">Pilih Kecamatan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="desa" class="form-label">Desa</label>
                <select id="desa" name="desa" class="form-select" required aria-label="select example" disabled>
                    <option value="">Pilih Desa</option>
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
                <input type="password" class="form-label" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus mengandung setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8-12 karakter" required>
            </div>

            <div id="message" style="display:none;">
                <p id="letter" class="invalid">A lowercase letter</p>
                <p id="capital" class="invalid">A capital letter</p>
                <p id="number" class="invalid">A number</p>
                <p id="length" class="invalid">At least 8 and maximum 12 characters</p>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-primary bi bi-save2" onclick="validateAdd()"> Save Data</button>
            </div>

            <div>
                <a href="<?= base_url('/penduduk') ?>" class="btn btn-primary bi bi-skip-backward"> Back To List</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function validateAdd() {

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
        if (!tempatTanggalLahir) {
            return alert('Tanggal Lahir harus diisi')
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

        axios.post('proses_add_penduduk', formData)
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

    //validasi foto
    function validateForm() {
        const fotoInput = document.getElementById('foto');
        const errorMessage = document.querySelector('.invalid-feedback');

        if (!fotoInput.files || !fotoInput.files[0]) {
            errorMessage.textContent = 'Mohon pilih foto Anda.';
            return false;
        }

        errorMessage.textContent = '';
        return true;
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
    $(document).ready(function() {

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
        } else {

        }
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
            // Form submission logic here, if needed
            // For example: document.getElementById('myForm').submit();
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

        // Lanjutkan dengan logika submit form sesuai kebutuhan
        // For example: document.getElementById('myForm').submit();
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
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        $('.datepicker').datepicker({
            language: "es",
            autoclose: true,
            format: "yyyy-mm-dd"
        });
    });
</script>
<!-- footer CONTENT -->
<?php echo view('layout/footer'); ?>
<!-- END footer -->

</html>