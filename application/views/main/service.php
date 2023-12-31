<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
            <h1 class="display-4">Pilih Jenis Servis</h1>
        </div>
        <div class="row gx-5">
            <div class="col-lg-6 mb-5">
                <div class="bg-primary dropshadow text-center rounded p-5">
                    <h1 class="mb-4">Latest Hits</h1>
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
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
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

            </div>
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