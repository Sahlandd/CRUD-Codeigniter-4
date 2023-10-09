<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <!-- SIDEBAR CONTENT -->
        <?php echo view('layout/sidebar'); ?>
        <!-- END SIDEBAR -->
        <div class="container">
            <!-- HEADER -->
            <?php echo view('layout/header'); ?>
            <!-- END HEADER -->
            <div class="grey-bg container-fluid">
                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dashboard</h4>
                            <p>Data Card</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-5 col-8">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-header">
                                        Jumlah Penduduk
                                    </div>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <!-- <i class="bi bi-people"></i> -->
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><?= $tot_penduduk ?> Penduduk </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-5 col-15">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-header">
                                        Jumlah Provinsi
                                    </div>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <!-- <i class="bi bi-globe-asia-australia"></i> -->
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><?= $tot_provinsi ?> Provinsi</h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-5 col-15">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-header">
                                        Jumlah Kabupaten
                                    </div>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <!-- <i class="bi bi-globe-asia-australia"></i> -->
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><?= $tot_kabupaten ?> Kabupaten</h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-5 col-15">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-header">
                                        Jumlah Kecamatan
                                    </div>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <!-- <i class="bi bi-globe-asia-australia"></i> -->
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><?= $tot_kecamatan ?> Kecamatan</h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-5 col-15">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-header">
                                        Jumlah Desa
                                    </div>
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <!-- <i class="bi bi-globe-asia-australia"></i> -->
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><?= $tot_desa ?> Desa</h3>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <section id="stats-subtitle">
                <div class="row">
                    <div class="col-12 mt-3 mb-1">
                        <!-- <h4 class="text-uppercase">Statistics With Subtitle</h4> -->
                        <p>Data Chart</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <i class="fas fa-chart-area me-1"></i>
                                <div class="card-header">
                                    Kelahiran Penduduk/Pertahun
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <input type="number" value="<?= date('Y') ?>" id="tahun_lahir" class="form-control" onchange="getLahir()">
                                </div>
                                <div id="chart-lahir" style="width: 600px;height:400px;"></div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <i class="fas fa-chart-area me-1"></i>
                                <div class="card-header">
                                    Jumlah Tiap Agama
                                </div>
                                <div id="chart-agama" style="width: 700px;height:435px;"></div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.2/echarts.min.js" integrity="sha512-VdqgeoWrVJcsDXFlQEKqE5MyhaIgB9yXUVaiUa8DR2J4Lr1uWcFm+ZH/YnzV5WqgKf4GPyHQ64vVLgzqGIchyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script>
                        $(document).ready(function() {
                            getLahir();
                            getAgama();
                        });

                        //line chart lahir
                        function chartLahir(datasets) {
                            var chart = echarts.init(document.getElementById('chart-lahir'));
                            var options = {
                                xAxis: {
                                    type: 'category',
                                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
                                },
                                yAxis: {
                                    type: 'value'
                                },
                                series: [{
                                    type: 'line',
                                    data: datasets
                                }]
                            };
                            chart.setOption(options);
                        }

                        //fungsi untuk mengakses data lahir
                        function getLahir() {
                            var tahun = $('#tahun_lahir').val();
                            $.ajax({
                                url: "/chart-lahir", //url route
                                method: "post",
                                data: {
                                    tahun: tahun
                                },
                                success: function(response) {
                                    var result = JSON.parse(response);
                                    var datasets = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                                    $.each(result.data, function(index, item) {
                                        datasets[item.bulan - 1] = item.jumlah;
                                    });
                                    //console.log(datasets);
                                    chartLahir(datasets);
                                }
                            });
                        }

                        //bar chart agama
                        function chartAgama(datasets, agama) {
                            var chart = echarts.init(document.getElementById('chart-agama'));
                            var options = {
                                xAxis: {
                                    type: 'category',
                                    data: agama
                                },
                                yAxis: {
                                    type: 'value'
                                },
                                series: [{
                                    type: 'bar',
                                    data: datasets
                                }]
                            };
                            chart.setOption(options);
                        }


                        //fungsi untuk mengakses data agama
                        function getAgama() {
                            $.ajax({
                                url: "/chart-agama", //route
                                method: "post",
                                success: function(resp) {
                                    var result = JSON.parse(resp);
                                    var datasets = [];
                                    $.each(result.data, function(index, item) {
                                        datasets.push(item.jumlah);
                                    });

                                    var agama = [];
                                    $.each(result.data, function(index, item) {
                                        agama.push(item.agama);
                                    });
                                    chartAgama(datasets, agama);
                                    console.log(result);
                                }
                            });
                        }
                    </script>
            </section>
        </div>
    </div>
</body>

</html>