<link href="<?= base_url('assets/'); ?>css/gridstorage.css" rel="stylesheet">

<!-- Services Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
      <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Storage Room</h5>
      <h1 class="display-4">Our Storage Room</h1>
    </div>
    <div class="box-explenation">
      <div>
        <div id="Penuh" class="smallbox"></div>
        <span class="explanation-smallbox">Full</span>
      </div>
      <div>
        <div id="SepaKosong" class="smallbox"></div>
        <span class="explanation-smallbox">Quarter Empty</span>
      </div>
      <div>
        <div id="Setengah" class="smallbox"></div>
        <span class="explanation-smallbox">Half Empty</span>
      </div>
      <div>
        <div id="Separuh" class="smallbox"></div>
        <span class="explanation-smallbox">Quarter Fill</span>
      </div>
      <div>
        <div id="Kosong" class="smallbox"></div>
        <span class="explanation-smallbox">Empty</span>
      </div>
    </div>
    <?php
    foreach ($order as $o) {
      ${$o->id_block} = $o->status_block;
    }
    ?>
    <div class="row gx-5">
      <div class="grid-container">
        <div class="outer-grid">
          <div class="blocktext">Block A</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a1';" id="<?= $A1 ?>">
                1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a2';" id="<?= $A2 ?>">
                2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a3';" id="<?= $A3 ?>">
                3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a4';" id="<?= $A4 ?>">
                4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a5';" id="<?= $A5 ?>">
                5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a6';" id="<?= $A6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a7';" id="<?= $A7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a8';" id="<?= $A8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/a9';" id="<?= $A9 ?>">9</div>
            </div>
          </div>
        </div>

        <div class="outer-grid">
          <div class="blocktext">Block B</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b1';" id="<?= $B1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b2';" id="<?= $B2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b3';" id="<?= $B3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b4';" id="<?= $B4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b5';" id="<?= $B5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b6';" id="<?= $B6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b7';" id="<?= $B7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b8';" id="<?= $B8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/b9';" id="<?= $B9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block C</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c1';" id="<?= $C1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c2';" id="<?= $C2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c3';" id="<?= $C3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c4';" id="<?= $C4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c5';" id="<?= $C5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c6';" id="<?= $C6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c7';" id="<?= $C7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c8';" id="<?= $C8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/c9';" id="<?= $C9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block D</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d1';" id="<?= $D1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d2';" id="<?= $D2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d3';" id="<?= $D3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d4';" id="<?= $D4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d5';" id="<?= $D5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d6';" id="<?= $D6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d7';" id="<?= $D7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d8';" id="<?= $D8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/d9';" id="<?= $D9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block E</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e1';" id="<?= $E1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e2';" id="<?= $E2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e3';" id="<?= $E3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e4';" id="<?= $E4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e5';" id="<?= $E5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e6';" id="<?= $E6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e7';" id="<?= $E7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e8';" id="<?= $E8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/e9';" id="<?= $E9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block F</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f1';" id="<?= $F1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f2';" id="<?= $F2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f3';" id="<?= $F3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f4';" id="<?= $F4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f5';" id="<?= $F5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f6';" id="<?= $F6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f7';" id="<?= $F7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f8';" id="<?= $F8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/f9';" id="<?= $F9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block G</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g1';" id="<?= $G1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g2';" id="<?= $G2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g3';" id="<?= $G3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g4';" id="<?= $G4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g5';" id="<?= $G5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g6';" id="<?= $G6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g7';" id="<?= $G7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g8';" id="<?= $G8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/g9';" id="<?= $G9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block H</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h1';" id="<?= $H1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h2';" id="<?= $H2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h3';" id="<?= $H3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h4';" id="<?= $H4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h5';" id="<?= $H5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h6';" id="<?= $H6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h7';" id="<?= $H7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h8';" id="<?= $H8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/h9';" id="<?= $H9 ?>">9</div>
            </div>
          </div>
        </div>
        <div class="outer-grid">
          <div class="blocktext">Block I</div>
          <div class="outer-square">
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i1';" id="<?= $I1 ?>">1</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i2';" id="<?= $I2 ?>">2</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i3';" id="<?= $I3 ?>">3</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i4';" id="<?= $I4 ?>">4</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i5';" id="<?= $I5 ?>">5</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i6';" id="<?= $I6 ?>">6</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i7';" id="<?= $I7 ?>">7</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i8';" id="<?= $I8 ?>">8</div>
            </div>
            <div class="inner-grid">
              <div class="inner-square" style="cursor: pointer;" onclick="window.location='detail/i9';" id="<?= $I9 ?>">9</div>
            </div>
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