<link href="<?= base_url('assets/'); ?>css/detailstorage.css" rel="stylesheet">

<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">History Room</h5>
            <h1 class="display-4">Our History</h1>
        </div>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-2">

                        <h2 class="heading-section text-uppercase">Detail Block</h2>
                    </div>
                    <div class="detailbox">
                        <form action="" method="POST">
                            <!-- <button class="btn btn-primary btn-dtlstorage">Input Product</button> -->
                            <input class="inpt_cari" style="" type="text" name="cari" id="cari"
                                placeholder="Cari Buku ...">

                            <button class="btn btn-secondary" type="submit" name="tmblcari"
                                value="tmblcari">Cari</button>

                            <hr>
                            <button class="btn btn-primary" type="submit" name="semua" value="Semua">Semua</button>
                            <button class="btn btn-primary" type="submit" name="input" value="Input Barang">Data
                                Input</button>
                            <button class="btn btn-primary" type="submit" name="output" value="Tersedia"> Data
                                Output</button>
                            <button class="btn btn-primary" type="submit" name="terbaru"
                                value="Terbaru">Terbaru</button>
                            <button class="btn btn-primary" type="submit" name="terlama"
                                value="Terbaru">terlama</button>
                        </form>

                    </div>
                </div>
                <?php
                if (isset($_POST['input'])) {
                    $order = $this->ModelStorage->joinHistoriInput()->result();
                    // $sql = "select * from buku_perpus where status_peminjaman='Tersedia'";
                    // $keterangan = 'Hasil Pencarian Berdasarkan Tersedia';
                } elseif (isset($_POST['output'])) {
                    $order = $this->ModelStorage->joinHistoriOutput()->result();

                    // $sql = "SELECT * FROM buku_perpus ORDER BY tanggal_donasi DESC";
                    // $keterangan = 'Hasil Pencarian Berdasarkan Tanggal Terbaru';
                } elseif (isset($_POST['terbaru'])) {
                    $order = $this->ModelStorage->joinHistoriTerbaru()->result();
                    // $sql = "SELECT * FROM buku_perpus";
                    // $keterangan = '';
                } elseif (isset($_POST['terlama'])) {
                    $order = $this->ModelStorage->joinHistoriTerlama()->result();
                    // $sql = "SELECT * FROM buku_perpus ORDER BY tanggal_donasi ASC";
                    // $keterangan = 'Hasil Pencarian Berdasarkan Tanggal Terlama';
                } elseif (isset($_POST['semua'])) {
                    $order = $this->ModelStorage->joinHistori()->result();
                    // $sql = "SELECT * FROM buku_perpus";
                    // $keterangan = '';
                } elseif (isset($_POST['tmblcari'])) {
                    // if ($_POST['cari'] != Null) {
                    $where = $_POST['cari'];
                    // $order = $this->ModelStorage->joinHistoriCari($where)->result();
                    $this->db->from('histori');
                    $this->db->join('produk', 'produk.id_produk = histori.id_produk');
                    $this->db->join('user', 'user.id = histori.id_user');
                    $this->db->like('nama', $where);
                    $this->db->or_like('nama_produk', $where);
                    $this->db->or_like('status', $where);
                    $this->db->or_like('jumlah_produk', $where);
                    // $this->db->or_like('tanggal', $where);
                    $cari = $this->db->get();
                    $order = $cari->result();
                    // }
                    // $cari = $_POST['cari'];
                    // $sql = "Select * from buku_perpus WHERE judul LIKE '%$cari%' or penulis LIKE '%$cari%' or tanggal_donasi LIKE '%$cari%' ORDER BY id DESC";
                    // $keterangan = "Hasil Pencarian Berdasarkan Pencarian : '$cari'";
                } else {
                    $sql = "SELECT * FROM buku_perpus";
                    $keterangan = '';
                }
                ?>
                <?php
                // print_r($order);
                ?>
                <div class="row">
                    <div class="col-md-15">
                        <!-- <h3 class="h5 mb-4 text-center">Detail Item</h3> -->
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Id Histori</th>
                                        <!-- <th>Picture</th> -->
                                        <th>Nama User</th>
                                        <th>Id Block</th>
                                        <th>Nama Produk</th>
                                        <th>Status</th>
                                        <th>Jumlah Produk</th>
                                        <th>Sisa Produk</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor_urut = 0;
                                    if ($order == null) { ?>



                                        <?php
                                    }
                                    $total_jumlah = 0;

                                    foreach ($order as $o) {
                                        $nomor_urut = $nomor_urut + 1;
                                        // $berat = $o->berat_produk;
                                        // $jumlah = $o->jumlah_produk;
                                        // $berat = $berat / 1000;
                                        // $total_berat = $berat * $jumlah;
                                        // $total_jumlah = $total_jumlah + $total_berat;
                                        ?>

                                        <tr>
                                            <td>
                                                <label class="checkbox-wrap checkbox-primary">
                                                    <!-- <input type="checkbox" checked> -->
                                                    <!-- <span class="checkmark"> -->
                                                    <span>
                                                        <?= $o->id_histori ?>
                                                    </span>
                                                </label>
                                            </td>
                                            <!-- <td>
                                                <div class="img" style="background-image: url(images/product-1.png);"></div>
                                            </td> -->
                                            <td>
                                                <div class="email">
                                                    <span style="font-weight: bold;">
                                                        <?= $o->nama ?>
                                                    </span>
                                                    <br>
                                                    <span>
                                                        <?= $o->nomor_tlp ?>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <?= $o->id_block ?>
                                            </td>
                                            <td class="quantity">
                                                <div class="email">
                                                    <span style="font-weight: bold;">
                                                        <?= $o->nama_produk ?>
                                                    </span>
                                                    <br>
                                                    <span>
                                                        <?= $o->deskripsi_produk ?>
                                                    </span>

                                            </td>
                                            <td>
                                                <?= $o->status ?>
                                            </td>
                                            <td>
                                                <?= $o->jumlah_produk ?>
                                            </td>
                                            <td>
                                                <?= $o->sisa_produk ?>
                                            </td>
                                            <td>
                                                <?= $o->tanggal ?>
                                            </td>
                                        </tr>
                                        <?php
                                    } ?>

                                <tfoot>
                                    <tr>
                                        <th>Id Histori</th>
                                        <!-- <th>Picture</th> -->
                                        <th>Nama User</th>
                                        <th>Id Block</th>
                                        <th>Nama Produk</th>
                                        <th>Status</th>
                                        <th>Jumlah Produk</th>
                                        <th>Sisa Produk</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img class="fa fa-2x" style="transform: rotate(14deg)" src="<?= base_url('assets/'); ?>img/diagnosa.png">
                    </div>
                    <h4 class="mb-3">Diagnosis</h4>
                    <p class="m-0">Diagnosis laptop anda sekarang, biarkan AI kami menemukan masalahnya!</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="<?= base_url('diagnosa/'); ?>">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img class="fa fa-2x" style="transform: rotate(14deg)" src="<?= base_url('assets/'); ?>img/box.png">
                    </div>
                    <h4 class="mb-3">Paket Perbaikan</h4>
                    <p class="m-0">Jenis Service yang sudah di tentukan dan hanya perlu memilih apa problem yang anda punya dan kami siap membantu anda</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="<?= base_url('package/'); ?>">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img class="fa fa-2x" style="transform: rotate(14deg)" src="<?= base_url('assets/'); ?>img/perbaiki.png">
                    </div>
                    <h4 class="mb-3">Perbaiki</h4>
                    <p class="m-0">Perbaiki laptop anda dan serahkan kepada kami, kami akan melakukannya untuk anda</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img class="fa fa-2x" style="transform: rotate(14deg)" src="<?= base_url('assets/'); ?>img/sparepart.png">
                    </div>
                    <h4 class="mb-3">Spare Part</h4>
                    <p class="m-0">Beli Spare Part laptop anda melalui kami, kami akan membantu mencarinya untuk anda</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img class="fa fa-2x" style="transform: rotate(14deg)" src="<?= base_url('assets/'); ?>img/sell.png">
                    </div>
                    <h4 class="mb-3">Jual Laptop</h4>
                    <p class="m-0">Jual Laptop kalian dan kami akan membelinya dengan harga yang fantastis</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <img class="fa fa-2x" style="transform: rotate(14deg)" src="<?= base_url('assets/'); ?>img/buy.png">
                    </div>
                    <h4 class="mb-3">Beli Laptop</h4>
                    <p class="m-0">Beli laptop yang kalian cari di kami dengan harga yang murah</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div> 
        </div> -->
    </div>
</div>
<script></script>
<!-- Services End -->