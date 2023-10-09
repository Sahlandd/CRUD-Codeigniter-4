<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css" /> -->
    <!-- sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> -->

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
        </symbol>
    </svg>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#moon-stars-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Data Penduduk</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"></path>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
        </symbol>
    </svg>

    <!-- SIDEBAR CONTENT -->
    <?php echo view('layout/sidebar'); ?>
    <!-- END SIDEBAR -->

    <!-- Content -->
    <div class="container mt-5">
        <!-- HEADER -->
        <?php echo view('layout/header'); ?>
        <!-- END HEADER -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Form Data Penduduk
                        <a href="<?= base_url('add_data_penduduk') ?>" class="btn btn-primary btn-sm float-right">Tambah Data Penduduk</a>
                    </div>

                    <div class="row">
                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Agama</label>
                                <select name="id_agama" id="id_agama" class="form-control form-control-sm">
                                    <option value="">-Semua Agama-</option>
                                    <?php foreach ($dataAgama as $row) : ?>
                                        <option value="<?= $row->id_agama ?>"><?= $row->agama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Gol.Darah</label>
                                <select name="id_golonganDarah" id="id_golonganDarah" class="form-control form-control-sm">
                                    <option value="">-Semua Golongan Darah-</option>
                                    <?php foreach ($dataGolonganDarah as $row) : ?>
                                        <option value="<?= $row->id_golonganDarah ?>"><?= $row->golonganDarah ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Uk.Baju</label>
                                <select name="id_ukuranBaju" id="id_ukuranBaju" class="form-control form-control-sm">
                                    <option value="">-Semua Ukuran Baju-</option>
                                    <?php foreach ($dataUkuranBaju as $row) : ?>
                                        <option value="<?= $row->id_ukuranBaju ?>"><?= $row->ukuranBaju ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Document</label>
                                <select name="id_document" id="id_document" class="form-control form-control-sm">
                                    <option value="">-Semua Document-</option>
                                    <?php foreach ($dataDocument as $row) : ?>
                                        <option value="<?= $row->id_document ?>"><?= $row->document ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Provinsi</label>
                                <select name="id_provinsi" id="id_provinsi" class="form-control form-control-sm">
                                    <option value="">-Semua Provinsi-</option>
                                    <?php foreach ($dataProvinsi as $row) : ?>
                                        <option value="<?= $row->id_provinsi ?>"><?= $row->provinsi ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Kabupaten</label>
                                <select name="id_kabupaten" id="id_kabupaten" class="form-control form-control-sm">
                                    <option value="">-Semua Kabupaten-</option>
                                    <?php foreach ($dataKabupaten as $row) : ?>
                                        <option value="<?= $row->id_kabupaten ?>"><?= $row->kabupaten ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Kecamatan</label>
                                <select name="id_kecamatan" id="id_kecamatan" class="form-control form-control-sm">
                                    <option value="">-Semua Kecamatan-</option>
                                    <?php foreach ($dataKecamatan as $row) : ?>
                                        <option value="<?= $row->id_kecamatan ?>"><?= $row->kecamatan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-1 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Desa</label>
                                <select name="id_desa" id="id_desa" class="form-control form-control-sm">
                                    <option value="">-Semua Desa-</option>
                                    <?php foreach ($dataDesa as $row) : ?>
                                        <option value="<?= $row->id_desa ?>"><?= $row->desa ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-12 col-12">
                            <div>
                                <label for="">Filter Tanggal Lahir</label>
                            </div>

                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <label class="col-form-label">Periode</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="date" class="form-control pickdate date_range_filter" id="start_tempat_tanggal_lahir">
                                    </div>
                                    <div class="col-auto">
                                        <span>-</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-sm-12 col-12">

                            <div class="col-auto">
                                <input type="date" class="form-control pickdate date_range_filter2" id="end_tempat_tanggal_lahir">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit" id="tampil">Cari</button>
                            </div>
                        </div>


                        <!-- <div class="col-xl-2 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Filter Tanggal Lahir</label>
                                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="bi bi-calendar-event-fill"></i>&nbsp;
                                    <span></span> <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                            
                        </div> -->

                        <!-- <script type="text/javascript">
                            $(function() {

                                var start = moment().subtract(29, 'days');
                                var end = moment();
                                //var subtract = data[4];

                                function cb(start, end) {
                                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                }

                                $('#reportrange').daterangepicker({
                                    startDate: start,
                                    endDate: end,
                                    ranges: {
                                        'Today': [moment(), moment()],
                                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                    }
                                }, cb);

                                cb(start, end);

                            });
                        </script> -->
                    </div>

                    <table id="datatable" class="table-responsive table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <!-- <th scope="col">No</th> -->
                                <th scope="col">Foto</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Nama Panggilan</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">Makanan Favorit</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Gol Darah</th>
                                <th scope="col">Ukuran Baju</th>
                                <th scope="col">Document</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Kabupaten</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Desa</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <!-- FOOTER -->
            <?php echo view('layout/footer'); ?>
            <!-- END FOOTER -->
        </footer>
    </div>
    </div>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> -->
<!-- date range -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    var table = $('#datatable').DataTable({
        "processing": true,
        "serverSide": true,
        "scrollX": true,
        "order": [],
        "ajax": {
            "url": "<?php echo base_url('penduduk/ajaxList') ?>",
            "type": "POST",
            data: function(d) {
                d.id_agama = $("#id_agama").val() //nambah ini
                d.id_golonganDarah = $("#id_golonganDarah").val()
                d.id_ukuranBaju = $("#id_ukuranBaju").val()
                d.id_document = $("#id_document").val()
                d.id_provinsi = $("#id_provinsi").val()
                d.id_kabupaten = $("#id_kabupaten").val()
                d.id_kecamatan = $("#id_kecamatan").val()
                d.id_desa = $("#id_desa").val()
                d.start_tempat_tanggal_lahir = $("#start_tempat_tanggal_lahir").val()
                d.end_tempat_tanggal_lahir = $("#end_tempat_tanggal_lahir").val()
            }
        },
        "columns": [{
                data: 'foto',
                render: function(data, type, row) {
                    if (type === 'display') {
                        return '<img src="<?= base_url("uploads/") ?>' + data + '" alt="Foto" width="30" height="30">';
                    }
                    return data;
                }
            },
            {
                data: 'nik'
            },
            {
                data: 'nama_lengkap'
            },
            {
                data: 'nama_panggilan'
            },
            {
                data: 'tempat_tanggal_lahir'
            },
            {
                data: 'nama_ibu'
            },
            {
                data: 'berat_badan'
            },
            {
                data: 'makanan_favorit'
            },
            {
                data: 'agama'
            },
            {
                data: 'golonganDarah'
            },
            {
                data: 'ukuranBaju'
            },
            {
                data: 'document'
            },
            {
                data: 'provinsi'
            },
            {
                data: 'kabupaten'
            },
            {
                data: 'kecamatan'
            },
            {
                data: 'desa'
            },
            {
                data: 'password'
            },
            {
                data: 'id_warga',
                render: function(data, type, row) {
                    return '<div class="d-flex justify-content-center align-items-center">' +
                        '<a href="<?= base_url('detail_data_penduduk/') ?>' + data + '" class="btn btn-info btn-sm bi bi-card-list"></a>' +
                        '<a href="<?= base_url('edit_data_penduduk/') ?>' + data + '" class="btn btn-warning btn-sm bi bi-pencil-square"></a>' +
                        '<a href="<?= base_url('delete_data_penduduk/') ?>' + data + '" class="btn btn-danger btn-sm bi bi-trash" onclick="return confirmDelete()"></a>' +
                        '</div>';
                }
            },
        ],
        "columnDefs": [{
            "targets": [0, 1, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17],
            "orderable": false,


        }]
    });

    $('#id_agama').on('change', function() {
        $('#datatable').DataTable().ajax.reload() //nambah ini buat reload tabel
    });
    $('#id_golonganDarah').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#id_ukuranBaju').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#id_document').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#id_provinsi').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#id_kabupaten').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#id_kecamatan').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#id_desa').on('change', function() {
        $('#datatable').DataTable().ajax.reload()
    });
    $('#tampil').on('click', function() {
        $('#datatable').DataTable().ajax.reload()
    });

    $(document).ready(function() {
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var min = $('.date_range_filter').val();
                var max = $('.date_range_filter2').val();
                var createdAt = data[4];

                console.log(data);
                if (
                    (min == "" || max == "") ||
                    (moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max))
                ) {
                    return true;
                }
                return false;
            }
        );
    });

    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus data ini?');
    }
</script>

</html>