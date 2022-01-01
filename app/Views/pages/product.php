<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- ========== HERO IMAGE ========== -->
<section class="hero">
  <div class="container">
    <div class="row justify-content-center hero-row">
      <div class="col-md-5 align-self-center hero-col1">
        <h6 class="text-start hero-subjudul">New arrival</h6>
        <h1 class="text-start hero-judul">Checkout our new kebaya collection</h1>
        <p class="text-start hero-collection">see all collection <i class="fa fa-heart pulse"></i></p>
      </div>
      <div class="col-md-5 dua">
        <div>
          <img src="<?php echo base_url('img/heroo.png'); ?>" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== DEAL OF THE WEAK ========== -->
<section class="dotw">
  <div class="container">
    <div class="row">
      <div class="col-md dotw-top">
        <h3 class="title">Deal of the week</h3>
        <h6 class="titledesc">Kejar Diskon Spesial</h6>
      </div>
    </div>

    <div class="row my-3 justify-content-center dotw-row1">
      <div class="col-2 dotw-col">
        <div class="card dotw-card">
          <a href="/pages/descBaju">
            <img src="<?php echo base_url('img/produk/Baju Barong Lukis Pria Hijau_60k.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="dotw-small">Fashion</small>
            <h6 class="card-title">Baju Barong Lukis</h6>
            <p class="card-text">Rp 66.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 dotw-col">
        <div class="card dotw-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/Tas Rotan khas bali.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="dotw-small">Fashion</small>
            <h6 class="card-title">Tas Rotan</h6>
            <p class="card-text">Rp 95.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 dotw-col">
        <div class="card dotw-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/topeng barong.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="dotw-small">Handicraft</small>
            <h6 class="card-title">Topeng Barong</h6>
            <p class="card-text">Rp 155.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 dotw-col">
        <div class="card dotw-card">
          <a href="/pages/descPie">
            <img src="<?php echo base_url('img/produk/Pie Susu 21 Bali Minipack_41k.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="dotw-small">Snack</small>
            <h6 class="card-title">Pie Susu</h6>
            <p class="card-text">Rp 35.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== KOLASE ========== -->
<section class="sect2">
  <div class="container">
    <div class="row justify-content-center">
      <!-- ========== KIRI ========== -->
      <div class="col-3 sect2-col1" style="padding: 0">
        <div class="sect2-bannerL" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
        url('<?php echo base_url('img/unsplash.jpg'); ?>'); height: 53vh; background-size: cover">
          <div class="container-fluid">
            <h1 class="text-white pt-5">Koleksi Topeng Kerajinan </h1>
          </div>
        </div>
      </div>

      <!-- ========== KANAN ========== -->
      <div class="col-md-5 sect2-col2">
        <!-- ========== KANAN ATAS ========== -->
        <div class="row sect2-row1 kolase">
          <div class="col sect2-col21" style="padding: 0">
            <div class="sect2-bannerRA" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
            url('<?php echo base_url('img/kcg.png'); ?>'); height: 21.5vh; background-size: cover">
              <div class="container-fluid">
                <h1 class="text-white pt-5"> Oleh-Oleh Makanan</h1>
              </div>
            </div>
          </div>
        </div>

        <!-- ========== KANAN BAWAH ========== -->
        <div class="row sect2-row2">
          <div class="col sect2-col31" style="padding: 0">
            <div class="sect2-bannerRB" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
            url('<?php echo base_url('img/artem.jpg'); ?>'); height: 30vh; background-size: cover">
              <div class="container-fluid">
                <h1 class="text-white pt-5">Koleksi Kerajinan</h1>
              </div>
            </div>
          </div>
          <div class="col sect2-col32" style="padding: 0">
            <div class="sect2-bannerRB" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
            url('<?php echo base_url('img/peraawatan.png'); ?>'); height: 30vh; background-size: cover">
              <div class="container-fluid">
                <h1 class="text-white pt-5">Perawatan Kulit</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== POPULAR ITEMS ========== -->
<section class="popular">
  <div class="container">
    <div class="row">
      <div class="col popular-top">
        <h3 class="title">Popular Items</h3>
        <h6 class="titledesc">Lagi trending, nih</h6>
      </div>
    </div>

    <div class="row my-3 justify-content-center popular-row1">
      <!-- ========== ROW ATAS ========== -->
      <div class="col-md-2 popular-col">
        <div class="card popular-card h-100">
          <a href="#">
            <img src="<?php echo base_url('img/produk/kain Tenun Endek Bali_225k.png'); ?>" class="card-img-top img1 pb-5" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Fashion</small>
            <h6 class="card-title">Kain Tenun Endek</h6>
            <p class="card-text">Rp 255.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/Tas Anyaman Pandan Motif Bunga Matahari_320k.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Handicraft</small>
            <h6 class="card-title">Tas Anyaman</h6>
            <p class="card-text">Rp115.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/topeng barong.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Handicraft</small>
            <h6 class="card-title">Topeng Barong</h6>
            <p class="card-text">Rp 155.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="/pages/descPie">
            <img src="<?php echo base_url('img/produk/Pie Susu 21 Bali Minipack_41k.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Snack</small>
            <h6 class="card-title">Pie Susu</h6>
            <p class="card-text">Rp 35.000</p>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== ROW BAWAH ========== -->
    <div class="row my-3 justify-content-center popular-row2">
      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/Motif Songket Ceker Rok Lilit Kamen Kain Satin Bali Lembaran_155k.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Fashion</small>
            <h6 class="card-title">Kamen Satin Bali</h6>
            <p class="card-text">Rp 485.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/Kain Pantai Bali Premium.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Fashion</small>
            <h6 class="card-title">Kain Pantai Bali</h6>
            <p class="card-text">Rp 79.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="#">
            <img src="<?php echo base_url('img/produk/kain batik bali motif ceki.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Fashion</small>
            <h6 class="card-title">Kain Batik Bali</h6>
            <p class="card-text">Rp 469.000</p>
          </div>
        </div>
      </div>

      <div class="col-2 popular-col">
        <div class="card popular-card">
          <a href="/pages/descCoffe">
            <img src="<?php echo base_url('img/produk/Kopi arabika kintamani bali_80k.png'); ?>" class="card-img-top" alt="" />
          </a>
          <div class="card-body bg-light">
            <small class="popular-small">Coffe</small>
            <h6 class="card-title">Kintamani Coffe</h6>
            <p class="card-text">Rp 88.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== SPECIAL FOR TODAY ========== -->
<section class="special">
  <div class="container">
    <div class="row">
      <div class="col special-top">
        <h3 class="title">Special for today</h3>
        <h6 class="titledesc">Promo spesial khusus hari ini saja!</h6>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card special-card">
          <div class="row c1">
            <div class="col-md-8">
              <div class="card-body special-body">
                <h6 class="sub">Juaranya Alkohol</h6>
                <h6 class="sub pt-5">Cashback hingga 100rb</h6>
              </div>
            </div>
            <div class="col-md-4 gmbr">
              <a href="#">
                <img src="<?php echo base_url('img/produk/card1.png'); ?>" class="img-fluid rounded-start b1" alt="..." />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card special-card">
          <div class="row c2">
            <div class="col-md-8">
              <div class="card-body special-body">
                <h6 class="sub">All About Songket</h6>
                <h6 class="sub pt-5">Diskon hingga 50%</h6>
              </div>
            </div>
            <div class="col-md-4 gmbr">
              <a href="#">
                <img src="<?php echo base_url('img/produk/card2.png'); ?>" class="img-fluid rounded-start b2" alt="..." />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card special-card">
          <div class="row c3">
            <div class="col-md-8">
              <div class="card-body special-body">
                <h6 class="sub">Perkopian Duniawi</h6>
                <h6 class="sub pt-5">Gratis Ongkir ke Seluruh Indonesia</h6>
              </div>
            </div>
            <div class="col-md-4 gmbr">
              <a href="#">
                <img src="<?php echo base_url('img/produk/card3.png'); ?>" class="img-fluid rounded-start b3" alt="..." />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection('content'); ?>