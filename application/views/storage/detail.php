<link href="<?= base_url('assets/'); ?>css/detailstorage.css" rel="stylesheet">

<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Storage Room</h5>
            <h1 class="display-4">Our Storage Room</h1>
        </div>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-2">

                        <h2 class="heading-section text-uppercase">Detail Block
                            <?= $id_block; ?> (Max 1Ton/1000KG)

                        </h2>
                    </div>
                    <?php
                    if ($role == 3 or $role == 1) {
                        if ($block[0]->status_block != "Penuh") {
                            ?>
                            <div class="detailbox">
                                <a href="<?= base_url('storage/input/' . $id_block); ?>">
                                    <button class="btn btn-primary btn-dtlstorage">Input Product</button>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-15">
                        <!-- <h3 class="h5 mb-4 text-center">Detail Item</h3> -->
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>No</th>
                                        <!-- <th>Picture</th> -->
                                        <th>Product</th>
                                        <th>Jumlah Produk</th>
                                        <th>Total Satuan Produk</th>
                                        <!-- <th>Jenis Satuan</th> -->
                                        <th>Total Harga</th>
                                        <?php if ($role == 2 or $role == 1) { ?>
                                            <th>Action Button</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($order == null) { ?>

                                        <tr>
                                            <td>
                                                <label class="checkbox-wrap checkbox-primary">
                                                    <!-- <input type="checkbox" checked> -->
                                                    <!-- <span class="checkmark"> -->
                                                    <span>
                                                        &nbsp;
                                                    </span>
                                                </label>
                                            </td>
                                            <!-- <td>
                                                <div class="img" style="background-image: url(images/product-1.png);"></div>
                                            </td> -->
                                            <td>
                                                <div class="email">
                                                    <span style="font-weight: bold;">
                                                        &nbsp;
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td class="quantity">
                                                <div class="input-group bold">
                                                    <!-- <input type="text" name="quantity"
                                                        class="quantity form-control input-number" value="" min="1"
                                                        max="100"> -->
                                                    <span style="font-weight: bold;">
                                                        KOSONG!
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                    $total_jumlah = 0;
                                    $nomor_urut = 0;
                                    foreach ($order as $o) {
                                        $nomor_urut = $nomor_urut + 1;
                                        // $berat = $o->berat_produk;
                                        // $jumlah = $o->jumlah_produk;
                                        // $berat = $berat / 1000;
                                        // $total_berat = $berat * $jumlah;
                                        // $total_jumlah = $total_jumlah + $total_berat;
                                        $jumlah = $o->jumlah_produk;
                                        $harga = $o->harga_produk;
                                        $total_harga = $harga * $jumlah;
                                        $total_satuan = $o->jumlah_satuan_produk .' '. $o->satuan_produk;
                                        ?>

                                        <tr>
                                            <td>
                                                <label class="checkbox-wrap checkbox-primary">
                                                    <!-- <input type="checkbox" checked> -->
                                                    <!-- <span class="checkmark"> -->
                                                    <span>
                                                        <?= $nomor_urut ?>
                                                    </span>
                                                </label>
                                            </td>
                                            <!-- <td>
                                                <div class="img" style="background-image: url(images/product-1.png);"></div>
                                            </td> -->
                                            <td>
                                                <div class="email">
                                                    <span style="font-weight: bold;">
                                                        <?= $o->nama_produk ?>
                                                    </span>
                                                    <br>
                                                    <span>
                                                        <?= $o->deskripsi_produk ?>
                                                    </span>
                                                </div>
                                            </td>
                                            
                                            <td class="quantity">
                                                <div class="input-group">
                                                    <!-- <input type="text" name="quantity"
                                                        class="quantity form-control input-number" value="" min="1"
                                                        max="100"> -->
                                                    <?= $jumlah ?>
                                                </div>
                                            </td>
                                           <td>
                                           <?= $total_satuan; ?> 
                                           </td>
                                            <td>
                                                Rp. <?= $total_harga ?>
                                            </td>
                                            
                                            <?php if ($role == 2 or $role == 1) { ?>
                                                <td>
                                                    <a href="<?= base_url('storage/output/' . $o->id_produk_gudang); ?>">
                                                        <button type="button" class="btn btn-primary">
                                                            Export Item
                                                        </button>

                                                    </a>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>

                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <!-- <th>Picture</th> -->
                                        <th>Product</th>
                                        <th>Jumlah Produk</th>
                                        <th>Total Satuan Produk</th>
                                        <!-- <th>jenis Satuan</th> -->
                                        <th>Total Harga</th>
                                        <?php if ($role == 2 or $role == 1) { ?>
                                            <th>Action Button</th>
                                        <?php } ?>
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