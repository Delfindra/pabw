<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- ========== DESKRIPSI BARANG ========== -->
<section class="desc">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 desc-gmbr">
                <div>
                    <img src="<?php echo base_url('img/produk/Kopi arabika kintamani bali_80k.png'); ?>" class="img-fluid float-start" alt="hero image" />
                </div>
            </div>
            <div class="col-md-5 align-self-center desc-deskripsi">
                <h6>SKU: SHX-165</h6>
                <h1 class="text-start judul">Kintamani Coffe</h1>
                <h5>Rp 88.000</h5>
                <p class="text-start desk">
                    Bali Kintamani Grade 1 Coffee Beans 100gr nett<br>

                    Roast Level: Filter Roast<br>

                    Profile: Grapefruit, Caramel, Chocolate, Black Tea<br>

                    Region: Kintamani, Bali<br>
                    Altitude: 1200- 1300 MASL<br>
                    Process: Full Wash<br>
                    Varietal: KOPYOL, USDA, S795<br>

                    Suggested Brewing Method:<br>
                    - French Press<br>
                    - Pour Over<br>
                    - Aero Press<br>
                    - Filter Brewer<br>
                    - Cold Brew<br>
                </p>
                <div class="btn">
                    <a href="/pages/cart">
                        <button type="button" class="btn1">Add to cart</button>
                    </a>
                    <a href="/pages/cart">
                        <button type="button" class="btn2">Buy Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== RELATED ITEMS ========== -->
<section class="related">
    <div class="container">
        <div class="row">
            <div class="col related-top">
                <h3 class="related-title">Related Products</h3>
                <!-- <h6 class="related-titledesc">Lorem ipsum dolor sit amet, condotwetur adipisicing elit. Tempora pariatur repudiandae voluptatum!</h6> -->
            </div>
        </div>

        <div class="row my-3 justify-content-center related-row1">
            <div class="col-2 related-col">
                <div class="card related-card">
                    <a href="#">
                        <img src="<?php echo base_url('img/produk/Motif Songket Ceker Rok Lilit Kamen Kain Satin Bali Lembaran_155k.png'); ?>" class="card-img-top" alt="" />
                    </a>
                    <div class="card-body bg-light">
                        <small class="related-small">Fashion</small>
                        <h6 class="card-title">Kamen Satin Bali</h6>
                        <p class="card-text">Rp 485.000</p>
                    </div>
                </div>
            </div>
            <div class="col-2 related-col">
                <div class="card related-card">
                    <a href="/pages/descBaju">
                        <img src="<?php echo base_url('img/produk/Baju Barong Lukis Pria Hijau_60k.png'); ?>" class="card-img-top" alt="" />
                    </a>
                    <div class="card-body bg-light">
                        <small class="related-small">Fashion</small>
                        <h6 class="card-title">Baju Barong Lukis</h6>
                        <p class="card-text">Rp 66.000</p>
                    </div>
                </div>
            </div>
            <div class="col-2 related-col">
                <div class="card related-card">
                    <a href="/pages/descPie">
                        <img src="<?php echo base_url('img/produk/Pie Susu 21 Bali Minipack_41k.png'); ?>" class="card-img-top" alt="" />
                    </a>
                    <div class="card-body bg-light">
                        <small class="related-small">Snack</small>
                        <h6 class="card-title">Pie Susu</h6>
                        <p class="card-text">Rp 35.000</p>
                    </div>
                </div>
            </div>
            <div class="col-2 related-col">
                <div class="card related-card">
                    <a href="#">
                        <img src="<?php echo base_url('img/produk/topeng barong.png'); ?>" class="card-img-top" alt="" />
                    </a>
                    <div class="card-body bg-light">
                        <small class="related-small">Handicraft</small>
                        <h6 class="card-title">Topeng Barong</h6>
                        <p class="card-text">Rp 155.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>