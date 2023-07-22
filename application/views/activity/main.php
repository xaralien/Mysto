<!-- Services Start -->
<?php
?>
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Activity</h5>
            <h1 class="display-4">Activity Mingguan</h1>
        </div>
        <div class="row gx-5">
            <div class="col-lg-6 mb-5">
                <div class="bg-primary dropshadow text-center rounded p-5">
                    <h1 class="mb-4">Input Barang Mingguan</h1>
                    <div class="row g-3">
                        <div class="mb-1 mt-1">
                            <div id="GoogleLineChart" style="height: 400px; width: 100%"></div>
                        </div>
                        <a class="btn btn-lg btn-primary rounded-pill"
                            href="<?= base_url('storage/createExcelInput'); ?>">Export Excel</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="bg-primary dropshadow text-center rounded p-5">
                    <h1 class="mb-4">Outup Barang Mingguan</h1>
                    <div class="row g-3">
                        <div class="mb-1 mt-1">
                            <div id="GoogleLineChartOutput" style="height: 400px; width: 100%"></div>
                        </div>
                        <a class="btn btn-lg btn-primary rounded-pill"
                            href="<?= base_url('storage/createExcelOutput'); ?>">Export Excel</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="bg-primary dropshadow text-center rounded p-5">
                    <h1 class="mb-4">Chart Gudang Yang Terpakai</h1>
                    <div class="row g-3">
                        <div class="mt-5">
                            <div id="GooglePieChart" style="height: 350px; width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="bg-primary dropshadow text-center rounded p-5">
                    <h1 class="mb-4">Pilih Metode</h1>
                    <div class="row g-3">
                        <div class="col-12 ">
                            <label style="float: left; " for=""><b>Metode Service</b> </label>

                            <select name="metode_kirim" id="metodes" class="form-select border-0"
                                style="height: 55px; ">
                                <option selected>Pilih Metode</option>
                                <option value="Antar Jemput">Antar - Jemput</option>
                                <option value="Di Tempat">Di Tempat</option>
                                <option value="Di Toko">Di Toko</option>
                            </select>
                            <hr style="margin-top: -5px;">
                        </div>
                        <div class="col-12 ">
                            <label style="float: left; " for=""><b>Metode Pembayaran</b> </label>

                            <select name="metode_pembayaran" id="metodes" class="form-select border-0"
                                style="height: 55px; ">
                                <option selected>Pilih Metode</option>
                                <option value="BRI">BRI</option>
                                <option value="BCA">BCA</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="GOPAY">GOPAY</option>
                                <option value="DANA">DANA</option>
                            </select>
                            <hr style="margin-top: -5px;">
                        </div>
                    </div>
                </div>

            </div> -->

            <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
            <script src="http://code.highcharts.com/highcharts.js"></script>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', { 'packages': ['corechart', 'bar'] });
                google.charts.setOnLoadCallback(drawLineChart);
                google.charts.setOnLoadCallback(drawLineChartOutput);
                google.charts.setOnLoadCallback(drawBarChart);
                // Line Chart
                function drawLineChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Day', 'Products Count'],
                        <?php
                        foreach ($products as $row) {
                            echo "['" . $row['day'] . "'," . $row['sell'] . "],";
                        } ?>
                    ]);
                    var options = {
                        title: 'Total Input Produk Minggu ini',
                        curveType: 'function',
                        legend: {
                            position: 'top'
                        }
                    };
                    var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChart'));
                    chart.draw(data, options);
                }

                function drawLineChartOutput() {
                    var data = google.visualization.arrayToDataTable([
                        ['Day', 'Products Count'],
                        <?php
                        foreach ($products_output as $row) {
                            echo "['" . $row['day_output'] . "'," . $row['sell_output'] . "],";
                        } ?>
                    ]);
                    var options = {
                        title: 'Total Input Produk Minggu ini',
                        curveType: 'function',
                        legend: {
                            position: 'top'
                        }
                    };
                    var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChartOutput'));
                    chart.draw(data, options);
                }

                google.charts.load('visualization', "1", {
                    packages: ['corechart']
                });
                google.charts.setOnLoadCallback(drawBarChart);

                // Pie Chart
                google.charts.setOnLoadCallback(showBarChart);
                function drawBarChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Day', 'Products Count'],
                        <?php
                        foreach ($gudangchart as $row) {
                            echo "['" . $row['status'] . "'," . $row['jumlah'] . "],";
                        }
                        ?>
                    ]);
                    var options = {
                        title: ' Chart Gudang',
                        is3D: true,
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('GooglePieChart'));
                    chart.draw(data, options);
                }

            </script>
            <script type="text/javascript">


            </script>
        </div>
    </div>
    <!-- Services End -->