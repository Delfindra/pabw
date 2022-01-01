<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- About -->
<section class="about">
    <div class="container">
        <div class="row justify-content-center about-row">
            <div class="col-md-5 align-self-center">
                <!-- <h1 class="text-center about-judul"></h1> -->
                <h1 class="text-center about-judul">Meet the <br />minds behind BaliCraft</h1>
                <p class="text-center about-desck">Teamwork makes the dream work. We work hard not for personal glory, but to succeed together</p>
            </div>
        </div>
    </div>
</section>

<section class="balicraft">
    <div class="container">
        <div class="row justify-content-evenly balicraft-bc">
            <div class="col-4">
                <h3 class="judul">Apa itu BaliCraft?</h3>
                <p class="desc3">
                    Pandemi yang masih berkelanjutan menyebabkan perekonomian di Bali semakin menurun. Akibat dari pandemi tersebut, tidak sedikit pelaku UKM di bali
                    yang mengalami keterpurukan. Bali yang dikenal dengan destinasi wisatanya, tidak bisa hanya bergantung di sektor pariwisata saja. jika hanya
                    mengandalkan sektor pariwisata tidak dapat memberikan kontribusi yang begitu signifikan.
                </p>
                <p class="desc3">
                    Balicraft merupakan Ecommerce marketplace yang berfungsi sebagai penyedia fasilitas lapak dagang berbasis online untuk pelaku UKM yang berada di
                    Bali yang bertujuan menjual ide bisnis dagangan mereka.
                </p>
            </div>
            <div class="col-4">
                <div class="img">
                    <img src="<?php echo base_url('img/aboutt.jpg') ?>" class="card-img gmbr2" alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <div class="row">
            <div class="col team-title2">
                <h5 class="text-center subjudul">The team</h5>
                <h1 class="text-center judul">
                    A small team with <br />
                    impressive cred
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 team-anjeli">
                <div class="card bg-dark text-white">
                    <img src="<?php echo base_url('img/profile/aa.png') ?>" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <div class="overlay">
                            <h5 class="card-title text-center align-bottom">Anjeli Puteri</h5>
                            <p class="card-text text-center align-bottom">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 team-delfin">
                <div class="card bg-dark text-white">
                    <img src="<?php echo base_url('img/profile/ddd.jpg') ?>" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <div class="overlay">
                            <h5 class="card-title text-center align-bottom">Delfindra Faiz</h5>
                            <p class="card-text text-center align-bottom">Backend Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 team-adib">
                <div class="card bg-dark text-white">
                    <img src="<?php echo base_url('img/profile/unggul.jpg') ?>" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <div class="overlay">
                            <h5 class="card-title text-center align-bottom">Ghifari Adib</h5>
                            <p class="card-text text-center align-bottom">Frontend Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 team-unggul">
                <div class="card bg-dark text-white">
                    <img src="<?php echo base_url('img/profile/uuu.jpg')  ?>" class="card-img" alt="..." />
                    <div class="card-img-overlay">
                        <div class="overlay">
                            <h5 class="card-title text-center align-bottom">Unggul Budi</h5>
                            <p class="card-text text-center align-bottom">UI Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>