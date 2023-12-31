<!-- Appointment Start -->
<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5">
            <div class="col-lg-6">
                <div class="bg-white text-center rounded p-5">
                    <h1 class="mb-4">Output Produk</h1>
                    <form method="post" action="<?= base_url('storage/prosesoutput/' . $this->uri->segment(3)); ?>">
                        <div class="row g-3">
                            <div class="col-12">
                                <label style="float: left; " for=""><b>Nama Produk</b> </label>
                                <input type="text" class="form-control border-0" name="jumlah_produ"
                                    value="<?= $isigudang[0]->nama_sub_kategori ?> - <?= $isigudang[0]->nama_produk ?>"
                                    readonly>
                                <hr style="margin-top: -5px;">
                            </div>
                            <!-- <div class="col-12 ">
                                <label style="float: left; " for=""><b>Nama Produk</b> </label>

                                <input type="text" class="form-control border-0" name="nama_produk"
                                    placeholder="Masukan Nama Produk . . .">
                                <hr style="margin-top: -5px;">
                            </div> -->
                            <div class="col-12 ">
                                <label style="float: left; " for=""><b>Jumlah Produk</b> </label>
                                <!-- <br>
                                <hr> -->
                                <input type="number" class="form-control border-0" name="jumlah_produk"
                                    placeholder="Masukan Jumlah Produk . . ." min="1">
                                <hr style="margin-top: -5px;">
                            </div>
                            <!-- <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div> -->
                            <!-- <div class="col-12">
                                <label id="dmpt" style="float: left;" for=""><b>Nama Pemilik Nomor</b> </label>
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                <hr style="margin-top: -5px;">

                            </div>
                            <div class="col-12">
                                <label id="dmpt" style="float: left;"><b>Nomor Pemilik</b> </label>
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                <hr style="margin-top: -5px;">

                            </div> -->
                            <!-- <div class="col-12">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div> -->
                            <!-- <div class="col-12">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div> -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Konfirmasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-black text-uppercase border-bottom border-5">Detail Produk</h5>
                    <h1 class="display-4">Isi Detail Produk Sesuai Dengan Produk Anda</h1>
                </div>
                <p class="text-black mb-5">
                    Masukan Nama Produk yang sudah tersedia di dalam selection. Jika produk yang anda cari tidak ada,
                    silahkan buat nama produk dan kategori
                    <a href="">Disini</a>.
                </p>
                <a href="<?= base_url('storage/input_produk') ?>"><button class="btn btn-primary py-3">Buat Nama dan
                        Kategori Produk</button></a>
                <!-- <h1 class="display-4 text-black mb-0">
                    <small class="align-top fw-normal"
                        style="font-size: 22px; line-height: 45px;">Rp.</small>50.000<small
                        class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">,00</small>
                </h1> -->

                <!-- <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a> -->
            </div>

        </div>
    </div>
</div>

<script>
    var myEl = document.getElementById('metodes');
    const rekening = document.getElementById('rkning');
    const dompet = document.getElementById('dmpt');
    myEl.addEventListener('click', function () {
        var value = $(this).val();
        if (value == "4" || value == "5") {
            rekening.textContent("Nama Pemilik Rekening");
            // dompet.style.visibility = 'visible';
            // rekening.style.visibility = 'hidden'

        } else if (value == "1" || value == "2" || value == "3") {
            if (rekening.style.visibility === 'hidden') {
                rekening.style.visibility = 'visible';
                dompet.style.visibility = 'hidden'
            }
        }
    }, false);
</script>
<!-- Appointment End -->